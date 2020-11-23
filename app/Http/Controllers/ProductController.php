<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Arr;

class ProductController extends Controller
{
    private function get_filter_brands($category)
    {
        $products = Product::whereHas('categories',function ($q) use ($category){
                            $q->where('name','=', $category); });

        $brands = array();
        foreach ($products->get() as $product) {
            if (!in_array($product->brand, $brands)) {
                array_push($brands, $product->brand);
            }
        }
        $brands = Arr::sort($brands);
        return $brands;
    }

    private function get_rams($category) {
        $products = Product::whereHas('categories',function ($q) use ($category){
                            $q->where('name','=', $category); });

        $rams = array();
        foreach ($products->get() as $product) {
            if (!in_array($product->ram, $rams)) {
                array_push($rams, $product->ram);
            }
        }
        $rams = Arr::sort($rams);
        return $rams;   
    }

    private function get_types($category) {
        $products = Product::whereHas('categories',function ($q) use ($category){
                            $q->where('name','=', $category); });

        $types = array();
        foreach ($products->get() as $product) {
            if (!in_array($product->type, $types)) {
                array_push($types, $product->type);
            }
        }
        return $types;   
    }

    public function index($category, Request $request)
    {
        // dd($request);
        $products = Product::whereHas('categories',function ($q) use ($category){
                                $q->where('name','=', $category); });

        $min_price = $products->min('price');      
        $max_price = $products->max('price');


        if ($request->filled('sort')) {
            if ($request->sort == 'asc') {
                $products = $products->orderBy('products.price', "asc");
            } else {
                $products = $products->orderBy('products.price', "desc");

            }
        }

        if ($request->filled('min_price')) {
            $products = $products->where('products.price', ">=", $request->get('min_price'));
        }

        if ($request->filled('max_price')) {
            $products = $products->where('products.price', "<=", $request->get('max_price'));
        }

        $rams = self::get_rams($category);
        $ram_category = array('mobiles','tablets','laptops','computers');
        $query_rams = $request->get("rams");

        if ($request->filled('rams')) {
            $products = $products->whereIn('products.ram',$request->get("rams"));
        }


        $types = self::get_types($category);
        $type_category = array('watches','televisions');
        $query_types = $request->get('types');

        // echo $products->get();
        // dd($query_types);
        if ($request->filled('types')) {
            $products = $products->WhereIn('products.type',$request->get("types"));
        }

        $brands = self::get_filter_brands($category);

        $query_brands = $request->get("brands");

        if ($request->filled('brands')) {
            $products = $products->whereIn('products.brand',$request->get("brands"));
        }


        // dd($request);
        $products = $products->join('images','products.id','=','images.product_id')
                            ->where('images.type','small')
                            ->Paginate(24)->onEachSide(2)
                            ->appends('sort', $request->get('sort'))
                            ->appends('min_price', $request->get('min_price'))
                            ->appends('max_price', $request->get('max_price'))
                            ->appends('brands',$query_brands)
                            ->appends('rams',$query_rams)
                            ->appends('types',$query_types);



        return view('products.products')
                ->with('products', $products)
                ->with('category', $category)
                ->with('min_price', $min_price)
                ->with('max_price', $max_price)
                ->with('brands',$brands)
                ->with('query_brands',$query_brands)
                ->with('ram_category',$ram_category)
                ->with('rams',$rams)
                ->with('query_rams',$query_rams)
                ->with('type_category',$type_category)
                ->with('types',$types)
                ->with('query_types',$query_types);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($category, int $id)
    {

        $category_dict = [
            'tablets' => 1,
            'mobiles' => 2,
            'watches' => 3,
            'televisions' => 4,
            'computers' => 5,
            'laptops' => 6,
        ];

        $detail = Product::with('images')->find($id);

        $small = $detail->images[0]->url; 
        $medium = $detail->images[1]->url; 
        $large = $detail->images[2]->url; 


        $gallery = array();
        for ($i=2; $i < sizeof($detail->images); $i++) { 
            array_push($gallery, $detail->images[$i]);                            
        }


        return view('detail')
                ->with('detail', $detail)
                ->with('small',$small)   
                ->with('medium',$medium)   
                ->with('large',$large)   
                ->with('gallery',$gallery);   

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }



    public function addToCart($id)
    {
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        //$out->writeln("Vyvolana funkcia addToCart");
        $out->writeln("id: " . $id);

        $product = Product::where('product_id' , '=' , $id)   
                    ->join('images','products.id','=','images.product_id')
                    ->where('images.type','small')
                    ->first();

        if(!$product) {
            abort(404);
        }

        $cart = session()->get('cart');
        // if cart is not created, create cart
        if(!$cart) {
            $cart = [];
        }

        $cart[$id] = [
            "brand" => $product->brand,
            "model" => $product->model,
            "photo_url" => $product->url,
            "price" => $product->price,
            "overall_price" => $product->price,
            "quantity" => 1];

        session()->put('cart', $cart);
        //return redirect()->back();
        return redirect()->back()->with('modal', $id);
    }


    public function removeCart(Request $request, $id)
    {
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        $request->session()->flash('success', 'Product removed successfully');
        return redirect()->back();
    }


    public function updateCart($id,$quantity)
    {
        /*$out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln("Vyvolana funkcia updateCart");
        $out->writeln("id: " . $id);
        $out->writeln("quantity: " . $quantity);*/


        $cart = session()->get('cart');
        $cart[$id]["quantity"] = $quantity;
        $cart[$id]["overall_price"] = $quantity * $cart[$id]["price"];
        session()->put('cart', $cart);

        return redirect()->back();
    }      
}

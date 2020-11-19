<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function show_category($category)
    {
        $category_dict = [
            'tablets' => 1,
            'mobiles' => 2,
            'watches' => 3,
            'televisions' => 4,
            'computers' => 5,
            'laptops' => 6,
        ];

        $products_all = Product::whereHas('categories',function ($q) use ($category_dict, $category){
                            $q->where('category_id','=', $category_dict[$category]); })
                            ->join('images','products.id','=','images.product_id')
                            ->where('images.type','small')
                            ->get();

        $price = array(
            'min' => $products_all->min('price'),
            'max' => $products_all->max('price')
        );

        $products = Product::whereHas('categories',function ($q) use ($category_dict, $category){
                            $q->where('category_id','=', $category_dict[$category]); })
                            ->join('images','products.id','=','images.product_id')
                            ->where('images.type','small')
                            ->Paginate(24)->onEachSide(2);

        // echo $price['min'];
        return view('products.products')
                ->with('products', $products)
                ->with('category', $category)
                ->with('price', $price);
    }

    public function sort($category, $direction)
    {
        $category_dict = [
            'tablets' => 1,
            'mobiles' => 2,
            'watches' => 3,
            'televisions' => 4,
            'computers' => 5,
            'laptops' => 6,
        ];

        $products = Product::whereHas('categories',function ($q) use ($category_dict, $category){
                            $q->where('category_id','=', $category_dict[$category]); })
                            ->join('images','products.id','=','images.product_id')
                            ->where('images.type','small')
                            ->orderBy('products.price', strtoupper($direction))
                            ->Paginate(24)->onEachSide(2);

        return view('products.products')->with('products', $products)->with('category',$category);   
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
}

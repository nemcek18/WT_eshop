<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Arr;


use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    private function get_filter_brands($query)
    {
        $products = Product::with('categories')
                            ->where(function($q) use ($query)
                            {
                                $q->where('description','ilike',"%$query%")
                                ->orWhere('brand','ilike',"%$query%")
                                ->orWhere('model','ilike',"%$query%");
                            });

        $brands = array();
        foreach ($products->get() as $product) {
            if (!in_array($product->brand, $brands)) {
                array_push($brands, $product->brand);
            }
        }                
        $brands = Arr::sort($brands);
        return $brands;
    }

    private function get_rams() {
        $products = Product::with('categories');

        $rams = array();
        foreach ($products->get() as $product) {
            if (!in_array($product->ram, $rams) and $product->ram != '') {
                array_push($rams, $product->ram);
            }
        }
        $rams = Arr::sort($rams);
        return $rams;   
    }

    private function get_types() {
        $products = Product::with('categories');

        $types = array();
        foreach ($products->get() as $product) {
            if (!in_array($product->type, $types) and $product->type != '') {
                array_push($types, $product->type);
            }
        }
        return $types;   
    }

    public function index(Request $request)
    {
        // $request->validate([
        //     'query'=>'required',
        // ]);

        $query = $request->input('query');

        $products = Product::join('categories_products','categories_products.product_id','=','products.id')
                            ->join('categories','categories.id','=','categories_products.category_id')
                            ->where(function($q) use ($query)
                            {
                                $q->where('description','ilike',"%$query%")
                                ->orWhere('brand','ilike',"%$query%")
                                ->orWhere('model','ilike',"%$query%");
                            });

        // echo $request->validate;
        // return;

        $min_price = $products->min('price');      
        $max_price = $products->max('price');

        if ($request->filled('min_price')) {
            $products = $products->where('products.price', ">=", $request->get('min_price'));
        }

        if ($request->filled('max_price')) {
            $products = $products->where('products.price', "<=", $request->get('max_price'));
        }

        if ($request->filled('sort')) {
            if ($request->sort == 'asc') {
                $products = $products->orderBy('products.price', "asc");
            } else {
                $products = $products->orderBy('products.price', "desc");

            }
        }

        $rams = self::get_rams();
        $query_rams = $request->get("rams");

        if ($request->filled('rams')) {
            $products = $products->whereIn('products.ram',$request->get("rams"));
        }

        $types = self::get_types();
        $query_types = $request->get('types');

        if ($request->filled('types')) {
            $products = $products->WhereIn('products.type',$request->get("types"));
        }

        $brands = self::get_filter_brands($query);
        $query_brands = $request->get("brands");

        if ($request->filled('brands')) {
            $products = $products->whereIn('products.brand',$request->get("brands"));
        }



        // echo $request;
        $products = $products->join('images','products.id','=','images.product_id')
                                ->where('images.type','small')
                                ->Paginate(24)
                                ->onEachSide(2)
                                ->appends('query', $query)
                                // ->setpath('')
                                ->appends('min_price', $request->get('min_price'))
                                ->appends('max_price', $request->get('max_price'))
                                ->appends('sort', $request->get('sort'))
                                ->appends('brands',$query_brands)
                                ->appends('rams',$query_rams)
                                ->appends('types',$query_types);

            


        return view('products.searched-results')
                ->with('products',$products)
                ->with('query',$query)
                ->with('min_price', $min_price)
                ->with('max_price', $max_price)
                ->with('brands',$brands)
                ->with('query_brands',$query_brands)
                ->with('rams',$rams)
                ->with('query_rams',$query_rams)
                ->with('types',$types)
                ->with('query_types',$query_types);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*$cart = session()->get('cart');
        if($cart) {
            $cart = [];
        }
        session()->put('cart', $cart);*/

        // $products_count = Product::get()->count();
        $products_all = Product::all();
        $products_list = array();
        foreach ($products_all as $product) {
            array_push($products_list, $product->id);
        }
        $timestamp = date_create()->format('Ymd');
        srand($timestamp);

        shuffle($products_list);

        $products_list = array_slice($products_list,0,12);

        $products = Product::whereIn('products.id', $products_list)
                    ->join('images','products.id','=','images.product_id')
                    ->where('images.type','small')
                    ->join('categories_products','products.id','=','categories_products.product_id')
                    ->join('categories','categories_products.category_id','=','categories.id')
                    ->get();

        $action_products = $products->slice(0, 4);
        $new_products = $products->slice(4, 4);
        $rec_products = $products->slice(8, 4);
        
        return view('home')->with('action_products', $action_products)
                    ->with('new_products', $new_products)
                    ->with('rec_products', $rec_products);
    }       
}
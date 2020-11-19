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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $products_count = Product::get()->count();
        
        $products_list = self::generator(12,1,$products_count);

        $products = Product::whereIn('id', $products_list)->get();

        $action_products = $products->slice(0, 4);
        $new_products = $products->slice(4, 4);
        $rec_products = $products->slice(8, 4);

        
        return view('home')->with('action_products', $action_products)
                    ->with('new_products', $new_products)
                    ->with('rec_products', $rec_products);
    }


    private function generator($n,$min, $max) {
        $timestamp = date_create()->format('Ymd');
        srand($timestamp);
       
        $numbers = range($min, $max);
       
        $rand_keys = array_rand($numbers, $n);
       
        return $rand_keys;
    }
       
}

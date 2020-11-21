<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'query'=>'required',
        ]);

        $query = $request->input('query');

        $products = DB::table('products')
                        ->join('categories_products','categories_products.product_id','=','products.id')
                        ->join('categories','categories_products.category_id','=','categories.id')
                        ->join('images','images.product_id','=','products.id')
                        ->where('images.type','small')
                        ->where(function($q) use ($query)
                        {
                            $q->where('description','like',"%$query%")
                            ->orWhere('brand','ilike',"%$query%")
                            ->orWhere('model','ilike',"%$query%");
                        })
                        ->Paginate(24)
                        ->onEachSide(2)
                        ->setpath('');
                        // ->take(5)
                        // ->get();
            
        // this line of code will make paginated searched data
        $products->appends(['query' => $query]);

        // echo $products;
        return view('products.searched-results')->with('products',$products);   
    }

    
}
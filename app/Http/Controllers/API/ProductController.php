<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class ProductController extends Controller
{
    
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'images' => 'gt:0|lt:2',
            'gallery_images' => 'gt:0',
            'name' => 'required',
            'brand' => 'required|max:50',
            'model' => 'required|max:50',
            'price' => 'required|gt:0',
            'description' => 'required|min:10||max:500',
        ],
        [
            'images.gt' => 'Main image is required',
            'images.lt' => 'Only 1 Main image',
            'gallery_images.gt' => 'At least 1 gallery image is required',
        ]
    );
          
        $product = Product::create(['brand' => $request->brand, 'model' => $request->model, 'price' => $request->price, 'description' => $request->description]);
        
        $array = array(
            "tablets" => 1,
            "mobiles" => 2,
            "watches" => 3,
            "televisions" => 4,
            "computers" => 5,
            "laptops" => 6,
        );

        $product->categories()->attach($array[$request->name]);

        // adding images to DB
        foreach ($request->uploadedImages as $url) {
            Image::create(['type' => 'small', 'url' => $url, 'product_id' => $product->id]);
        }

        foreach ($request->galleryUpload as $url) {
            Image::create(['type' => 'large', 'url' => $url, 'product_id' => $product->id]);
        }

        return response()->json(['id' => $product->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        // validations and error handling is up to you!!! ;)
        $request->validate([
            'images' => 'gt:0|lt:2',
            'gallery_images' => 'gt:0',
            'brand' => 'required|max:50',
            'model' => 'required|max:50',
            'price' => 'required|gt:0',
            'description' => 'required|min:10||max:500',
        ],
        [
            'images.gt' => 'Main image is required',
            'images.lt' => 'Only 1 Main image',
            'gallery_images.gt' => 'At least 1 gallery image is required',
        ]
    );

        $product->brand = $request->brand;
        $product->model = $request->model;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        $array = array(
            "tablets" => 1,
            "mobiles" => 2,
            "watches" => 3,
            "televisions" => 4,
            "computers" => 5,
            "laptops" => 6,
        );

        DB::table('categories_products')
            ->where('product_id',$product->id)
            ->update(['category_id' => $array[$request->name]]);


        // removing images from DB 
        foreach ($request->removedImages as $item) {

            // if image is from public folder
            if (str_contains($item['url'], 'http://127.0.0.1:8000/images/')) {
                $filename = substr($item['url'], 22);
                unlink($filename);
            }
            Image::destroy($item['id']);

        }

        foreach ($request->galleryRemove as $item) {

            // if image is from public folder
            if (str_contains($item['url'], 'http://127.0.0.1:8000/images/')) {
                $filename = substr($item['url'], 22);
                unlink($filename);
            }
            Image::destroy($item['id']);

        }

        // adding images to DB
        // return $request;
        foreach ($request->uploadedImages as $url) {
            Image::create(['type' => 'small', 'url' => $url, 'product_id' => $product->id]);
        }

        foreach ($request->galleryUpload as $url) {
            Image::create(['type' => 'large', 'url' => $url, 'product_id' => $product->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
  
        $images = DB::table('images')
            ->where('product_id','=',$product->id)
            ->get();

        foreach ($images as $item) {
            if (str_contains($item->url, 'http://127.0.0.1:8000/images/')) {
                $filename = substr($item->url, 22);
                unlink($filename);
            }
            Image::destroy($item->id);
        }

        $product->categories()->detach();
        $product->delete();
 
        return response()->json(['status'=>'success','msg' => 'Product deleted successfully']);
    }

    public function list($page) {  
        // get rowsPerPage from query parameters (after ?), if not set => 5
        $rowsPerPage = request('rowsPerPage', 5);
            
        // get sortBy from query parameters (after ?), if not set => brand
        $sortBy = request('sortBy', 'price');
            
        // get descending from query parameters (after ?), if not set => false 
        $descendingBool = request('descending', 'false');
        // convert descending true|false -> desc|asc
        $descending = $descendingBool === 'true' ? 'desc' : 'asc';
        
        // pagination
        // IFF rowsPerPage == 0, load ALL rows
        if ($rowsPerPage == 0) {
            // load all products from DB
            $products = Product::join('categories_products','categories_products.product_id','=','products.id')
                ->join('categories','categories.id','=','categories_products.category_id')
                ->orderBy($sortBy, $descending)
                ->get();
        } else {
            $offset = ($page - 1) * $rowsPerPage;
              
            // load products from DB

            $products = Product::join('categories_products','categories_products.product_id','=','products.id')
                ->join('categories','categories.id','=','categories_products.category_id')
                ->orderBy($sortBy, $descending)
                ->offset($offset)
                ->limit($rowsPerPage)
                ->get();
        }
      
        // total number of rows -> for quasar data table pagination
        $rowsNumber = DB::table('products')->count();
            
        return response()->json(['rows' => $products, 'rowsNumber' => $rowsNumber]);
    }

    public function edit(Product $product)
    {
        error_log($product->id);


        $id = $product->id;

        $product = Product::join('categories_products','categories_products.product_id','=','products.id')
                ->join('categories','categories.id','=','categories_products.category_id')
                ->where('products.id',$id)
                ->first();

        $images = DB::table('images')
                    ->where('product_id','=',$id)
                    ->where('type','small')
                    ->get();

        $product->images = $images;

        $gallery_images = DB::table('images')
                    ->where('product_id','=',$id)
                    ->where('type','large')
                    ->get();

        $product->gallery_images = $gallery_images;
        
        return response()->json($product);
    }
    
    public function upload(Request $request)
    {
        $current_timestamp = Carbon::now()->timestamp;
        $request->file->move("images", $current_timestamp . $request->file->getClientOriginalName());

        return response()->json([
            'path' => url("images/" . $current_timestamp . $request->file->getClientOriginalName()),
            'type_gallery' => $request->type_gallery
        ]);
    }

    public function remove(Request $request)
    {
        foreach ($request->images as $path) {
            $filename = substr($path, 22);
            unlink($filename);
        }
    }
}
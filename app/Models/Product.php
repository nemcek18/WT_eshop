<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['brand', 'model', 'price', 'description'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    use HasFactory;

    public function products()
    {
        return $this->hasMany('App\Models\Basket');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category','categories_products','product_id','category_id');
    }

    public function order()
    {
        return $this->belongsToMany('App\Models\Order','orders_products','product_id','order_id');
    }
}

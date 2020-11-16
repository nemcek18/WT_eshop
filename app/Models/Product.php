<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany('App\Basket');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category','categories_products','product_id','category_id');
    }

    public function order()
    {
        return $this->belongsToMany('App\Order','orders_products','product_id','order_id');
    }
}

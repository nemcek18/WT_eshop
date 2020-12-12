<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_id', 'product_id'];
    // protected $primaryKey = 'id';
    public $timestamps = false;

    use HasFactory;

    public function products()
    {
        return $this->hasMany('App\Models\Product','categories_products','category_id','product_id');
    }
}

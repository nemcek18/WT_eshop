<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['type', 'url', 'product_id'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    use HasFactory;

    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }
}

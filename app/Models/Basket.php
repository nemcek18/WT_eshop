<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function products()
    {
        return $this->belongsTo('App\Product');
    }
}

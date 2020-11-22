<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false;

    use HasFactory;

    public function users()
    {
    	return $this->hasMany('App\Models\User');
    }

    protected $fillable = ['street','city', 'postal_code'];
}

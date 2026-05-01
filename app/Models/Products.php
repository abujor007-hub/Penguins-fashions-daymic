<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'catagory', 'title', 'status', 'price', 'dis_price', 'quintity', 'products_image', 'description'
    ];
}

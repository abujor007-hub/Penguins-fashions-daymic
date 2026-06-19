<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;

class OrderItem extends Model
{
    protected $fillable = [
        'product_id', 'order_id', 'quintity', 'price'
    ];




    public function product(){
        return $this->belongsTo(Products::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}



<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_img', 
        'product_img2', 
        'product_img3', 
        'product_img4', 
        'product_code', 
        'product_name', 
        'product_price', 
        'product_price', 
        'product_store',
        'product_exp',
        'product_trade_status',
        'categories_id',
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'categories_id');
    }

}

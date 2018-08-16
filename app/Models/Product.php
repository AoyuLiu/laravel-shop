<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protect $fillable = [
    	'title','description','image','on_sale',
    	'rating','sold_count','review_count','price'
    ];
    protect $casts = [
    	'on_sale' => 'boolean'
    ];

    public function skus()
    {
    	return $this->hasMany(ProductSku::class);
    }
}

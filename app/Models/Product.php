<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function photos()
    {
        return $this->hasMany(Photo::class, 'product_id', 'id');
    }

    public function categories()
    {
        return $this->belongsToMany(Product::class, 'child_category_product', 'product_id', 'child_category_id')->withTimestamps();
    }

}

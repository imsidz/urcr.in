<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_sub_category', 'product_id', 'sub_category_id')->withTimestamps();
    }
}

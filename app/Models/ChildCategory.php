<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class, 'child_category_product', 'product_id', 'child_category_id')->withTimestamps();
    }
}

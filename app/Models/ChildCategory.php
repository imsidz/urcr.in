<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class, 'child_category_product', 'child_category_id', 'product_id');
    }
}

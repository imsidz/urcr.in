<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function photos()
    {
        return $this->hasMany(Photo::class, 'product_id', 'id');
    }

    // public function subcategories()
    // {
    //     return $this->belongsToMany(SubCategory::class, 'product_sub_category', 'product_id', 'sub_category_id')->withTimestamps();
    // }

    public function childcategories()
    {
        return $this->belongsToMany(ChildCategory::class, 'child_category_product', 'product_id', 'child_category_id');
    }
}

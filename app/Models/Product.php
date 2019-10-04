<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function photos()
    {
        return $this->hasMany(Photo::class, 'product_id', 'id');
    }

    public function subcategories()
    {
        return $this->belongsToMany(SubCategory::class, 'product_sub_category', 'product_id', 'sub_category_id')->withTimestamps();
    }
}

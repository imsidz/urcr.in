<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }

    public function sellers()
    {
        return $this->belongsToMany(Seller::class, 'seller_category', 'seller_id', 'category_id');
    }
}

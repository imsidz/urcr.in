<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChildCategory extends Model
{
    use SoftDeletes;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'child_category_product', 'product_id', 'child_category_id')->withTimestamps();
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }

    public function subchildcategories()
    {
        return $this->hasMany(SubChildCategory::class, 'child_category_id', 'id');
    }
}

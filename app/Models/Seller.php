<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seller extends Model
{
    use SoftDeletes;

    public function products()
    {
        return $this->hasMany(Product::class, 'seller_id', 'id');
    }

    public function scopeApproved($query)
    {
        return $query->where('verify', true);
    }

    public function scopeDisapproved($query)
    {
        return $query->where('verify', false);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'seller_category', 'seller_id', 'category_id');
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'seller_material', 'seller_id', 'material_id');
    }

    public function childcategories()
    {
        return $this->belongsToMany(ChildCategory::class, 'seller_child_category', 'seller_id', 'child_category_id');
    }
}

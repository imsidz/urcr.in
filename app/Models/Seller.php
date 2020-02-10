<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
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
        return $this->belongsToMany(Category::class, 'seller_category', 'category_id', 'seller_id');
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'seller_material', 'material_id', 'seller_id');
    }
}

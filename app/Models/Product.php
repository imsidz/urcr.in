<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function photos()
    {
        return $this->hasMany(Photo::class, 'product_id', 'id');
    }

    public function childcategories()
    {
        return $this->belongsToMany(ChildCategory::class, 'child_category_product', 'product_id', 'child_category_id')->withTimestamps();
    }

    public function orders()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'order_id', 'product_id');
    }

    public function scopeStore($query)
    {
        return $query->where('store', true);
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'material_product', 'product_id', 'material_id');
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id', 'id');
    }
}

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

    public function scopeApproved($query)
    {
        return $query->where('approve', true);
    }

    public function scopeDisapprove($query)
    {
        return $query->where('approve', false);
    }

    public function subchildcategories()
    {
        return $this->belongsToMany(SubChildCategory::class, 'sub_child_category_products', 'product_id', 'sub_child_category_id')->withTimestamps();
    }

    public function style()
    {
        return $this->belongsTo(Style::class, 'style_id', 'id');
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_size', 'product_id', 'size_id')->withTimestamps();
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color_product', 'product_id', 'color_id')->withTimestamps();
    }
}

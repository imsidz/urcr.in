<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class, 'material_product', 'material_id', 'product_id');
    }

    public function sellers()
    {
        return $this->belongsToMany(Seller::class, 'seller_material', 'material_id', 'seller_id');
    }
}

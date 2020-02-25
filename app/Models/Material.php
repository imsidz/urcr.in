<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use SoftDeletes;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'material_product', 'material_id', 'product_id');
    }

    public function sellers()
    {
        return $this->belongsToMany(Seller::class, 'seller_material', 'material_id', 'seller_id');
    }
}

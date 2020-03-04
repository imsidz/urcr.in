<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductRequestByCustomer extends Model
{
    use SoftDeletes;

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'product_request_material', 'product_request_by_customers_id', 'material_id')->withTimestamps();
    }

    public function subchildcategories()
    {
        return $this->belongsToMany(SubChildCategory::class, 'product_request_category', 'product_request_by_customers_id', 'sub_child_category_id')->withTimestamps();
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id', 'id');
    }
}

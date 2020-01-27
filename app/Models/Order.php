<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
    {
        return $this->hasMany(OrderedProduct::class, 'order_id', 'id');
    }
}

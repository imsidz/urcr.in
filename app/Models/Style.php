<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Style extends Model
{
    use SoftDeletes;

    public function products()
    {
        return $this->hasMany(Product::class, 'style_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubChildCategory extends Model
{
    public function childcategory()
    {
        return $this->belongsTo(ChildCategory::class, 'child_category_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubChildCategoryMegaMenu extends Model
{
    public function childcategory()
    {
        return $this->belongsTo(ChildCategoryMegaMenu::class, 'child_category_id', 'id');
    }

    public function subchildcategory()
    {
        return $this->belongsTo(SubChildCategory::class, 'sub_child_category_id', 'id');
    }
}

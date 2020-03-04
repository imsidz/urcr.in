<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChildCategoryMegaMenu extends Model
{
    public function subcategory()
    {
        return $this->belongsTo(SubCategoryMegaMenu::class, 'sub_category_id', 'id');
    }

    public function childcategory()
    {
        return $this->belongsTo(ChildCategory::class, 'child_category_id', 'id');
    }

    public function subchildcategories()
    {
        return $this->hasMany(SubChildCategoryMegaMenu::class, 'sub_child_category_id', 'id');
    }

}

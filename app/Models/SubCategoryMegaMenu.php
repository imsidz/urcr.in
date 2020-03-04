<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategoryMegaMenu extends Model
{
    public function category()
    {
        return $this->belongsTo(CategoryMegaMenu::class, 'category_mega_menu_id', 'id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }

    public function childcategories()
    {
        return $this->hasMany(ChildCategoryMegaMenu::class, 'sub_category_id', 'id');
    }
}

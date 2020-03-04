<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategoryMegaMenu extends Model
{
    public function categorymegamenu()
    {
        return $this->belongsTo(CategoryMegaMenu::class, 'category_mega_menu_id', 'id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }
}

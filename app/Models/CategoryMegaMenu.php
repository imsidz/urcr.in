<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryMegaMenu extends Model
{
    public function megamenu()
    {
        return $this->belongsTo(MegaMenu::class, 'mega_menu_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function subcategories()
    {
        return $this->hasMany(SubCategoryMegaMenu::class, 'category_mega_menu_id', 'id');
    }
}

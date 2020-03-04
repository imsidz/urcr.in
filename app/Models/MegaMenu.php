<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MegaMenu extends Model
{
    public function categories()
    {
        return $this->hasMany(CategoryMegaMenu::class, 'mega_menu_id', 'id');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MegaMenuCategory extends Controller
{   
    public function index()
    {
        return view('admin.megamenu.index');
    }
    public function categoryIndex()
    {
        return view('admin.megamenu.category.index');
    }
}

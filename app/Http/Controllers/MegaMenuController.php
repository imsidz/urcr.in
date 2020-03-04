<?php

namespace App\Http\Controllers;

use App\Http\Resources\MegaMenuCategoryResources;
use App\Models\Category;
use Illuminate\Http\Request;

class MegaMenuController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return MegaMenuCategoryResources::collection($categories);
    }
}

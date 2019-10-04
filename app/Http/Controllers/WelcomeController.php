<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $subcategories = SubCategory::latest()->get();
        $collection1 = Product::inRandomOrder()->paginate(2);
        $collection2 = Product::inRandomOrder()->paginate(2);
        return view('welcome', compact('subcategories', 'collection1', 'collection2'));
    }
}

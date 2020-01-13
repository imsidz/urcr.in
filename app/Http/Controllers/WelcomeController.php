<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $latests = Product::latest()->store()->paginate('8');

        $subcategories = SubCategory::latest()->whereNotNull('image')->get();
        $collection1 = Product::inRandomOrder()->store()->paginate(2);
        $collection2 = Product::inRandomOrder()->store()->paginate(2);
        return view('welcome', compact('subcategories', 'collection1', 'collection2', 'latests'));
    }
}

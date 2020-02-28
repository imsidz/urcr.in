<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $latests = Product::latest()->approved()->store()->paginate('24');
        $banners = Banner::where('active', true)->latest()->paginate(5);
        $subcategories = SubCategory::latest()->whereNotNull('image')->paginate(6);
        $collection1 = Product::inRandomOrder()->approved()->store()->paginate(2);
        $collection2 = Product::inRandomOrder()->approved()->store()->paginate(2);
        return view('welcome', compact('subcategories', 'collection1', 'collection2', 'latests', 'banners'));
    }
}

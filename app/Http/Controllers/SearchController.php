<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Product;
use App\Models\Style;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $products = Product::where('title', 'LIKE', '%' . $request->search . '%')->orWhere('description', 'LIKE', '%' . $request->search . '%')->latest()->paginate(20);
        $styles = Style::latest()->get();
        $materials = Material::latest()->get();
        return view('products.index', compact('products', 'styles', 'materials'));
    }
}

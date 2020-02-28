<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Material;
use App\Models\Product;
use App\Models\Size;
use App\Models\Style;
use App\Models\SubChildCategory;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $products = Product::where('title', 'LIKE', '%' . $request->search . '%')->orWhere('description', 'LIKE', '%' . $request->search . '%')->latest()->paginate(20);
        $styles = Style::latest()->get();
        $materials = Material::latest()->get();
        $sizes = Size::latest()->get();
        $colors = Color::latest()->get();
        return view('products.index', compact('products', 'styles', 'materials', 'sizes', 'colors'));
    }

    public function postSearch(Request $request)
    {
        $childcategories = SubChildCategory::where('name', 'LIKE', '%' . $request->search . '%')->paginate(20);

        return response()->json(['results' => $childcategories]);
    }
}

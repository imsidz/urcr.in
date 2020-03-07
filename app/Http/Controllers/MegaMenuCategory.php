<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryMegaMenu;
use App\Models\MegaMenu;
use Illuminate\Http\Request;

class MegaMenuCategory extends Controller
{
    public function index()
    {
        return view('admin.megamenu.index');
    }
    public function categoryIndex($id)
    {
        $menu = MegaMenu::find($id);
        $categories = Category::latest()->get();
        $catemegamenus = CategoryMegaMenu::where('mega_menu_id', $id)->latest()->paginate();
        return view('admin.megamenu.category.index', compact('menu', 'categories', 'catemegamenus'));
    }

    public function categoryStore(Request $request, $id)
    {
        foreach ($request->categories as $category) {
            $cat = new CategoryMegaMenu;
            $cat->mega_menu_id = $id;
            $cat->category_id = $category;
            $cat->save();
        }

        return back()->with('success', 'Added new Megamenu');
    }
}

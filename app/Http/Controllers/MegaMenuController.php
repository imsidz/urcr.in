<?php

namespace App\Http\Controllers;

use App\Http\Resources\MegaMenuCategoryResources;
use App\Models\Category;
use App\Models\CategoryMegaMenu;
use App\Models\MegaMenu;
use App\Models\SubCategory;
use App\Models\SubCategoryMegaMenu;
use Illuminate\Http\Request;

class MegaMenuController extends Controller
{   
    public function index()
    {   
        $menus = MegaMenu::latest()->paginate();
        return view('admin.megamenu.index', compact('menus'));
    }

    public function create()
    {   
        $categories = Category::get();
        return view('admin.megamenu.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $megamenu = new MegaMenu;
        $megamenu->name = $request->name;
        $megamenu->active = false;
        $megamenu->save();
        
        foreach($request->categories as $category){
            $cat = new CategoryMegaMenu;
            $cat->mega_menu_id = $megamenu->id;
            $cat->category_id = $category;
            $cat->save();
        }

        return redirect('/admin/mega-menu')->with('success', 'Added new Megamenu');
    }
    public function getMenuData()
    {   
        $menus = MegaMenu::where('active', true)->first();
        $categories = $menus->categorymegamenus;
        return MegaMenuCategoryResources::collection($categories);
    }

    public function indexSubCategories($menu_id, $category_id)
    {   
        $menu = MegaMenu::find($menu_id);
        $category = CategoryMegaMenu::find($category_id);
        $subcategories = SubCategory::latest()->get();
        $subcatmegamenus = SubCategoryMegaMenu::where('category_mega_menu_id', $category_id)->latest()->paginate();
        return view('admin.megamenu.subcategory.index', compact('menu', 'category', 'subcategories', 'subcatmegamenus'));
    }

    public function storeSubCategories($menu, $category, Request $request)
    {   
        foreach ($request->subcategories as $subcat) {
            $sub = new SubCategoryMegaMenu;
            $sub->category_mega_menu_id = $category;
            $sub->sub_category_id = $subcat;
            $sub->save();
        }

        return back()->with('success', 'Save Success');
    }
}

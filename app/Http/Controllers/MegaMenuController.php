<?php

namespace App\Http\Controllers;

use App\Http\Resources\MegaMenuCategoryResources;
use App\Models\Category;
use App\Models\CategoryMegaMenu;
use App\Models\MegaMenu;
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
    // public function index()
    // {
    //     $categories = Category::get();
    //     return MegaMenuCategoryResources::collection($categories);
    // }
}

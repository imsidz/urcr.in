<?php

namespace App\Http\Controllers;

use App\Http\Resources\MegaMenuCategoryResources;
use App\Models\Category;
use App\Models\CategoryMegaMenu;
use App\Models\ChildCategory;
use App\Models\ChildCategoryMegaMenu;
use App\Models\MegaMenu;
use App\Models\SubCategory;
use App\Models\SubCategoryMegaMenu;
use App\Models\SubChildCategory;
use App\Models\SubChildCategoryMegaMenu;
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

        foreach ($request->categories as $category) {
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

    public function indexChildCategory($menu, $category_id, $subcategory_id)
    {
        $menu = MegaMenu::find($menu);
        $category = CategoryMegaMenu::find($category_id);
        $subcategory = SubCategoryMegaMenu::find($subcategory_id);
        $childcategories = ChildCategory::where('submited', true)->latest()->get();
        $childmenus = ChildCategoryMegaMenu::where('sub_category_id', $subcategory_id)->latest()->paginate();
        return view('admin.megamenu.childcategory.index', compact('menu', 'category', 'subcategory', 'childcategories', 'childmenus'));
    }

    public function storeChildCategory($menu, $category_id, $subcategory_id, Request $request)
    {
        $menu = MegaMenu::find($menu);
        $category = CategoryMegaMenu::find($category_id);
        $subcategory = SubCategoryMegaMenu::find($subcategory_id);

        foreach ($request->childcategories as $child) {
            $childcat = new ChildCategoryMegaMenu;
            $childcat->sub_category_id = $subcategory_id;
            $childcat->child_category_id = $child;
            $childcat->save();
        }

        return back()->with('success', 'ChildCategory Added');
    }

    public function indexSubChildCategory($menu, $category_id, $subcategory_id, $childcategory_id)
    {
        $menu = MegaMenu::find($menu);
        $category = CategoryMegaMenu::find($category_id);
        $subcategory = SubCategoryMegaMenu::find($subcategory_id);
        $childcategory = ChildCategoryMegaMenu::find($childcategory_id);
        $subchildcategories = SubChildCategory::where('submited', true)->latest()->get();
        $subchildmenus = SubChildCategoryMegaMenu::where('child_category_id', $childcategory_id)->latest()->paginate();
        // $childmenus = ChildCategoryMegaMenu::latest()->paginate();
        return view('admin.megamenu.subchildcategory.index', compact('menu', 'category', 'subcategory', 'childcategory', 'subchildcategories', 'subchildmenus'));
    }

    public function storeSubChildCategory($menu, $category_id, $subcategory_id, $childcategory_id, Request $request)
    {
        $menu = MegaMenu::find($menu);
        $category = CategoryMegaMenu::find($category_id);
        $subcategory = SubCategoryMegaMenu::find($subcategory_id);
        $childcategory = ChildCategoryMegaMenu::find($childcategory_id);

        foreach ($request->subchildcategories as $subchild) {
            $subch = new SubChildCategoryMegaMenu;
            $subch->sub_child_category_id = $subchild;
            $subch->child_category_id = $childcategory_id;
            $subch->save();
        }

        return back()->with('success', 'Save Success');
    }

    public function removeSubChildCategory($menu, $category, $subcategory, $childcategory, $subchildcategory)
    {
        $subc = SubChildCategoryMegaMenu::find($subchildcategory);

        $subc->delete();

        return back()->with('success', 'Removed Success');
    }

    public function removeCategory($menu, $category)
    {
        $cat = CategoryMegaMenu::find($category);
        $cat->delete();

        return back()->with('success', 'Removed Success');
    }

    public function removeSubCategory($menu, $category, $subcategory)
    {
        $sub = SubCategoryMegaMenu::find($subcategory);
        $sub->delete();

        return back()->with('success', 'Removed Success');
    }

    public function removeChildCategory($menu, $category, $subcategory, $childcat)
    {
        $child = ChildCategoryMegaMenu::find($childcat);
        $child->delete();

        return back()->with('success', 'Removed Success');
    }

    public function activeMenu($id)
    {
        $menu = MegaMenu::find($id);
        $exist = MegaMenu::where('active', true)->first();
        if ($exist) {
            $exist->active = false;
            $exist->save();
        }
        $menu->active = true;
        $menu->save();

        return back()->with('success', 'Activated Success');
    }

    public function deactivateMenu($id)
    {
        $menu = MegaMenu::find($id);
        $menu->active = false;
        $menu->save();

        return back()->with('success', 'Deactivated Success');
    }
}

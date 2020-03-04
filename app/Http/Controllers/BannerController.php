<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class BannerController extends Controller
{
    public function adminIndex()
    {   
        $banners = Banner::latest()->paginate(20);
        return view('admin.banner.index', compact('banners'));
    }

    public function adminCreate()
    {
        return view('admin.banner.create');
    }

    public function adminStore(Request $request)
    {
        $banner = new Banner;
        $banner->title = $request->title;
        $banner->url = $request->url;

        $name = time() . Str::random(10) . '.' . $request->image->getClientOriginalExtension();
        $image = Image::make($request->image)->save(public_path() . '/images/' . $name, 60);

        // $image->move(public_path().'/images/', $name);
        $url = url('/images/' . $name);
        $banner->image = $url;
        $banner->active = true;
        $banner->save();

        return redirect('/admin/banners')->with('success', 'Banner Added Success');
    }

    public function adminEdit($id)
    {   
        $banner = Banner::find($id);
        return view('admin.banner.edit', compact('banner'));
    }

    public function adminUpdate(Request $request, $id)
    {
        $banner = Banner::find($id);
        $banner->title = $request->title;
        $banner->url = $request->url;

        if($request->hasFile('image')){
            $name = time() . Str::random(10);
            $image = Image::make($request->image)->save(public_path() . '/images/' . $name . '.png', 60);
            $url = url('/images/' . $name . '.png');
            $banner->image = $url;
        }
        
        $banner->active = true;
        $banner->save();

        return redirect('/admin/banners')->with('success', 'Banner Updated Success');
    }

    public function adminDelete($id)
    {
        $banner = Banner::find($id);
        $banner->delete();

        return redirect('/admin/banners')->with('success', 'Banner Deleted Success');

    }
}

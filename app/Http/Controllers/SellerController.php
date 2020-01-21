<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index()
    {
        $sellers = Seller::approved()->latest()->paginate(25);
        return view('admin.seller.index', compact('sellers'));
    }

    public function getRequests()
    {
        $sellers = Seller::disapproved()->paginate(20);
        return view('admin.seller.request', compact('sellers'));
    }

    public function sellerApprove(Request $request)
    {
        $seller = Seller::find($request->seller);
        $seller->verify = true;
        $seller->save();

        return back()->with('success', 'Activated Success');
    }

    public function sellerDecline()
    {
        return back()->with('success', 'Deactivate Success');
    }
}

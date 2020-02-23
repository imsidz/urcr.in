<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Str;

class CouponController extends Controller
{
    public function adminIndex()
    {
        $coupons = Coupon::latest()->paginate(25);
        return view('admin.coupon.index', compact('coupons'));
    }

    public function adminStore(Request $request)
    {
        $coupon = new Coupon;
        $coupon->name = $request->name;
        if ($request->code) {
            $coupon->code = $request->code;
        } else {
            $coupon->code = Str::random(6);
        }

        if ($request->limit == 'single') {

            $coupon->single_use = true;
        } else {
            $coupon->single_use = false;
            $coupon->limit_number = $request->amount;
        }

        $coupon->discount_percent = $request->percent;
        $coupon->max_amount = $request->max;
        $coupon->active = true;
        $coupon->save();

        return back()->with('success', 'Coupon Generated Success');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Services\Discount\Coupon\CouponValidator;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    protected $validator;

    public function __construct(CouponValidator $validator)
    {
        $this->middleware('auth');
        $this->validator = $validator;
    }


    public function store(Request $request)
    {
        try {
            $request->validate(['coupon' => ['required', 'exists:coupons,code']]);
            $coupon = Coupon::where('code', $request->coupon)->firstOrFail();

            session()->put(['coupon' => $coupon]);
            return redirect()->back()->with('promo_success', 'coupon added');
        } catch (\Exception $e) {

            dd($e);
            return redirect()->back()->with('promo_error', 'invalid code');
        }

    }

    public function remove()
    {
        session()->forget('coupon');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Services\Discount\Coupon\CouponValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

            return redirect()->back()->with('promo_error', 'invalid code');
        }

    }

    public function remove()
    {
        session()->forget('coupon');
        return redirect()->back();
    }

    public function adminList()
    {
        $coupons = Coupon::all();
        return view('admin.discount.list', compact('coupons'));
    }

    public function adminListDelete(Request $request)
    {
        $request->validate(['couponId' => ['required']]);
        $coupon =Coupon::find($request->couponId)->first();
        $coupon->delete();
        return redirect()->back()->with('success', 'discount code was delete');
    }

    public function adminListStore(Request $request)
    {
        $request->validate([
            'present' => ['required'],
            'limit_uses' => ['required'],
            'expire_time' => ['required'],
        ]);
        $data = $request->all('present', 'limit_uses', 'expire_time');
        $data['code'] = Str::random(5);
        Coupon::create($data);
        return redirect()->back()->with('success', 'discount code was create');
    }
}

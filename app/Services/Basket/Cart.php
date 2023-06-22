<?php

namespace App\Services\Basket;

use App\Models\Plan;

class Cart
{
    public function total()
    {
        $plan = (session()->get('cart.plan'));
        $plan_price = Plan::find(session()->get('cart.plan'))->price;
        $coupon = (session()->get('coupon'));
        if (!is_null($coupon)) {
            return $plan_price - ($plan_price * $coupon->present / 100);


        }
        return $plan_price;
        //        return session()->->get('coupon');

    }
}

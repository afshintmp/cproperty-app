<?php

namespace App\Services\Basket;

use App\Models\Plan;
use App\Services\Storage\Contracts\StorageInterface;

class Coupon
{
    private $storage;

    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function total()
    {
        $plan = (session()->get('cart.plan'));
        $plan_price = Plan::find(session()->get('cart.plan'))->price;
        $coupon = (session()->get('coupon'));
        if (!is_null($coupon)){
            dump($plan_price - ($plan_price * $coupon->present / 100));



        }
        dump($plan_price);
        //        return session()->->get('coupon');

    }


}

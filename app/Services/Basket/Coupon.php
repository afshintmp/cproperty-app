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

    public function getCouponName()
    {
        return session()->get('coupon')->code . '<span class="text-green">(' . session()->get('coupon')->present . '%) </span>';
    }

    public function getCouponDiscount()
    {
        $plan = (session()->get('cart.plan'));
        $plan_price = Plan::find(session()->get('cart.plan'))->price;
        $coupon = (session()->get('coupon'));
        return $plan_price * $coupon->present / 100;
    }

}

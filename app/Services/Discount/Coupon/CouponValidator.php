<?php

namespace App\Services\Discount\Coupon;

use App\Models\Coupon;
use App\Services\Discount\Coupon\Validator\HasStock;
use App\Services\Discount\Coupon\Validator\IsExpire;

class CouponValidator
{
    public function isValid(Coupon $coupon)
    {
        $isExpire = resolve(IsExpire::class);
        $hasStock = resolve(HasStock::class);

        $isExpire->setNextValidator($hasStock);
        return $isExpire->validate($coupon);
    }
}

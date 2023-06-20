<?php

namespace App\Services\Discount\Coupon\Validator;

use App\Exceptions\CouponHasExpired;
use App\Models\Coupon;
use App\Services\Discount\Coupon\Validator\Contracts\AbastractCopounValidator;

class HasStock extends AbastractCopounValidator
{

    /**
     * @throws CouponHasExpired
     */
    public function validate(Coupon $coupon)
    {
        if (!$coupon->hasStock()){
            throw new CouponHasExpired();
        }

        return parent::validate($coupon);
    }
}

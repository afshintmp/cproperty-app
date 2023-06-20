<?php

namespace App\Services\Discount\Coupon\Validator\Contracts;

use App\Models\Coupon;

class AbastractCopounValidator implements CouponValidatorInterface
{

    private $nextValidator;


    public function setNextValidator(CouponValidatorInterface $validator): void
    {
        $this->nextValidator = $validator;
    }

    public function validate(Coupon $coupon)
    {
        if ($this->nextValidator === null) {
            return true;
        }
        return $this->nextValidator->validate($coupon);
    }
}

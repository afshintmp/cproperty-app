<?php

namespace App\Services\Discount;

use App\Services\Cost\basketCost;

class DiscountManager
{
    private $basketCost;

    public function __construct(basketCost $basketCost)
    {
        $this->basketCost = $basketCost;
    }

    public function calculateUserDiscount()
    {
        return $this->basketCost;
    }
}

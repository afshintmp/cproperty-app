<?php

namespace App\Services\Cost;

use App\Services\Basket\Basket;
use App\Services\Cost\Contracts\CostInterface;
use App\Services\Discount\DiscountManager;

class discountCost implements CostInterface
{

    protected $cost;

    public function __construct(CostInterface $cost, DiscountManager $discountManager)
    {
        $this->cost = $cost;
        $this->discountManager = $discountManager;
    }


    public function getCost()
    {
        return $this->discountManager->calculateUserDiscount();
    }

    public function getTotalCost()
    {
        return $this->getCost();
    }

    public function description()
    {
        return 'Discount Cost';
    }

    public function getSummery()
    {
        return [$this->description() => $this->getTotalCost()];
    }

}

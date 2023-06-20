<?php

namespace App\Services\Cost;

use App\Services\Basket\Basket;
use App\Services\Cost\Contracts\CostInterface;

class basketCost implements CostInterface

{
    protected $basket;

    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }


    public function getCost()
    {
        return $this->basket->subTotal();
    }

    public function getTotalCost()
    {
        return $this->getCost();
    }

    public function description()
    {
        return 'Total';
    }

    public function getSummery()
    {
        return [$this->description() => $this->getTotalCost()];
    }
}

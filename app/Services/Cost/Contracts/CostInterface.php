<?php

namespace App\Services\Cost\Contracts;

interface CostInterface
{
    public function getCost();

    public function getTotalCost();

    public function description();

    public function getSummery();
}

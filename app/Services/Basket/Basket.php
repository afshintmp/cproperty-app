<?php

namespace App\Services\Basket;


use App\Models\Plan;
use App\Services\Storage\Contracts\StorageInterface;

class Basket
{
    private $storage;

    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function add(Plan $plan)
    {
        $this->storage->set('plan', $plan->id);
    }

}

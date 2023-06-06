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

    public function subTotal()
    {
        $plan = $this->storage->get('plan');
        return Plan::find($plan)->price;
    }

    public function plan()
    {
        $plan = $this->storage->get('plan');
        return $plan;
    }

    public function clear()
    {
        $this->storage->clear();
    }

}

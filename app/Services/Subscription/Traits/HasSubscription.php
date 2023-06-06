<?php

namespace App\Services\Subscription\Traits;

use App\Models\Plan;
use App\Models\User;
use function PHPUnit\Framework\isEmpty;

trait HasSubscription
{
    public function plans()
    {
        return $this->belongsToMany(Plan::Class);
    }

    public function hasPlan()
    {
        if (isEmpty($this->hasPlan())) {
            return false;
        }
        return $this->hasPlan();
    }

    public function addPlanToUser($order)
    {

        $this->plans()->sync([1 => ['started_time' => '2023-06-06 20:03:16' , 'end_life_time' => '2023-06-06 20:03:16']]);

    }

}

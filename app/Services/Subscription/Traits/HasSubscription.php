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

    public function addPlanToUser($plan_id, $start_time, $end_time)
    {

        $this->plans()->sync([$plan_id => ['started_time' => $start_time, 'end_life_time' => $end_time]]);

    }

}

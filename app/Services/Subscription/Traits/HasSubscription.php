<?php

namespace App\Services\Subscription\Traits;

use App\Models\Plan;
use App\Models\User;
use function PHPUnit\Framework\isEmpty;

trait HasSubscription
{
    public function plan()
    {
        return $this->belongsTo(Plan::Class);
    }

    public function hasPlan()
    {
        if (isEmpty($this->hasPlan())) {
            return false;
        }
        return $this->hasPlan();
    }

}

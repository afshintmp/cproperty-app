<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'limit_uses', 'expire_time', 'present'];

    public function isExpires(): bool
    {
        return Carbon::now()->isAfter(Carbon::parse($this->expire_time));
    }

    public function hasStock()
    {
        return ($this->limit_uses > 0);

    }
}

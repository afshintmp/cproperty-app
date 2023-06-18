<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = ['phase_id', 'floor_plan', 'name', 'floor', 'price', 'face', 'size', 'storage', 'parking', 'bedroom', 'bathroom', 'garden', 'dens', 'flex', 'balcony'];

//
//    public function phases(): BelongsTo
//    {
//        return $this->has(Phase::class);
//    }


}

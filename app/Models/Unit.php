<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = ['phase_id', 'floor_plan', 'name', 'floor', 'start_price', 'end_price', 'face'
        , 'start_size', 'end_size', 'start_storage', 'end_storage', 'start_parking', 'end_parking', 'start_bedroom', 'end_bedroom'
        , 'start_bathroom', 'end_bathroom', 'start_garden', 'end_garden', 'start_dens', 'end_dens', 'start_flex', 'end_flex',
        'start_balcony', 'end_balcony'];

//
//    public function phases(): BelongsTo
//    {
//        return $this->has(Phase::class);
//    }


    public function faces(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Face::class);
    }

}

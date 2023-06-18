<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Phase extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'name'];

    public function units(): HasMany
    {
        return $this->hasMany(Unit::class);
    }

    public function getFloorUnistsAttribute()
    {
//         return $this->units()->get();
        return Arr::keyBy($this->units()->get(), 'floor');
//        return Arr::keyBy($units, 'floor');
    }

}

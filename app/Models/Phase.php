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

    public function getUnitSortAttribute()
    {
        $units = $this->units()->get();
        $endData = [];
        foreach ($units as $unit) {
            $data = [
                'id' => $unit->id,
                'name' => $unit->name,
                'floor' => $unit->floor,
                'floor_plan' => $unit->floor_plan,
                'phase' => $this->type,
                'price' => $unit->price

            ];
            $endData[] = $data;
        }
        $mapped = [];
        foreach ($endData as $key => $val) {
            $key = 'Floor' . $val['floor'];
            $mapped [$key][] = $val;
        }
        return $mapped;

    }

}

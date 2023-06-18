<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = ['phase_id', 'floor_plan', 'name', 'floor', 'price', 'face', 'size', 'storage', 'parking', 'bedroom', 'bathroom', 'garden', 'dens', 'flex', 'balcony'];
}

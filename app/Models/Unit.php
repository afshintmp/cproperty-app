<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = ['floor', 'price', 'face', 'size', 'storage', 'parking', 'bedroom', 'garden', 'den', 'flex'];
}

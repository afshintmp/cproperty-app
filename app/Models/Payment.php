<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'amount', 'status', 'gateway', 'ref_num'];


    protected $attributes = [
        'status' => 0
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status', 'full_name', 'display_name', 'phone', 'image', 'image_name' ,
        'country' , 'company' , 'address' , 'postcode' , 'state'];
}

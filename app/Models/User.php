<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Services\Permission\Traits\HasPermissions;
use App\Services\Permission\Traits\HasRoles;
use App\Services\Subscription\Traits\HasSubscription;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use function PHPUnit\Framework\isNull;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPermissions, HasSubscription;

    use HasApiTokens, HasFactory, Notifiable;

    private $request;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    public function builds()
//    {
//        $this->hasMany(Build::class, 'developer');
//    }

    public function plan()
    {
        $this->belongsTo(Plan::class);
    }

    public function hasPlan()
    {
        if (isNull($this->belongsTo(Plan::class))) return false;
        return $this->plan();
    }
}

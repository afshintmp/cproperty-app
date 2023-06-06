<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Services\Permission\Traits\HasPermissions;
use App\Services\Permission\Traits\HasRoles;
use App\Services\Subscription\Traits\HasSubscription;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use function PHPUnit\Framework\isNull;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPermissions, HasSubscription;

//    use HasApiTokens, HasFactory, Notifiable ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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

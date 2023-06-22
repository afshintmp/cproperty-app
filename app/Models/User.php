<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Services\Permission\Traits\HasPermissions;
use App\Services\Permission\Traits\HasRoles;
use App\Services\Subscription\Traits\HasSubscription;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        return $this->belongsTo(Plan::class);
    }

    public function info(): BelongsTo
    {
        return $this->belongsTo(Info::class);
    }

    public function builds(): HasMany
    {
        return $this->hasMany(Build::class);

    }

    public function hasPlan()
    {
        if (isNull($this->belongsTo(Plan::class))) return false;
        return $this->plan();
    }

    public function realtorIsActive()
    {
        $user_id = auth()->user()->id;

        $info = Info::where('user_id', $user_id)->first();

        if ($info && $info->phone !== null) {
            return true;
        }

        return false;
    }
}

<?php

namespace App\Models;


use Carbon\Carbon;
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
use Illuminate\Support\Facades\DB;
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
        $plan = DB::table('plan_user')->where('user_id', $this->id)->orderByDesc('started_time')->first();

        if (!$plan) return false;
        return Carbon::now()->isBefore(Carbon::parse($plan->end_life_time));

    }


    public function dashboardLink()
    {


        if ($this->hasRole('admin')) {
            return route('admin.dashboard');
        }
        if ($this->hasRole('developer')) {
            return route('developer.dashboard');
        }

        return route('realtor.dashboard');

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

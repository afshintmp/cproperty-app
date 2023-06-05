<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Subscription\Traits\HasSubscription;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){
       dd(auth()->user()->hasPlan());
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Basket\Basket;
use App\Services\Storage\Contracts\StorageInterface;
use App\Services\Storage\SessionStorage;
use App\Services\Subscription\Traits\HasSubscription;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        if (auth()->user()->hasRole('admin')) return redirect()->route('admin.dashboard');
        if (auth()->user()->hasRole('developer')) return redirect()->route('developer.dashboard');
        if (auth()->user()->hasPlan()) {


        } else {
            $sessionStorage = resolve(StorageInterface::class);
            if (!$sessionStorage->exist('plan')) {
                return redirect()->route('plan.index');
            } else {
                return redirect()->route('checkout');

            };

        };
    }
}

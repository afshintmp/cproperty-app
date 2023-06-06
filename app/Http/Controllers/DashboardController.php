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

    public function index(){
       if(auth()->user()->hasPlan()){



       }else{
           $sessionStorage = resolve(StorageInterface::class);
           if(!$sessionStorage->exist('plan')){
               return redirect()->route('plan.index');
           };


       };
    }
}

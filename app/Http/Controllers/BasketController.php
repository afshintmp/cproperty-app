<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Services\Basket\Basket;
use App\Services\Storage\Contracts\StorageInterface;
use App\Services\Storage\SessionStorage;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    protected $basket;

    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }

    public function add(Plan $plan)
    {
        resolve(StorageInterface::class)->clear();
        $this->basket->add($plan);

        if (! auth()->user()){
            return view('auth.register');
        }else{
            return redirect()->route('checkout');
        }

    }

    public function checkOut(){
        dump(session()->all());
        return view('checkout');
    }
}

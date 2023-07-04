<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Services\Basket\Basket;
use App\Services\Basket\Cart;
use App\Services\Payment\Transaction;
use App\Services\Storage\Contracts\StorageInterface;
use App\Services\Storage\SessionStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    private $basket;

    private $transaction;
    private $cart;

    public function __construct(Basket $basket, Transaction $transaction, Cart $cart)
    {
        $this->basket = $basket;
        $this->transaction = $transaction;
        $this->cart = $cart;
    }

    public function add(Plan $plan)
    {
        resolve(StorageInterface::class)->clear();
        $this->basket->add($plan);

        if (!auth()->user()) {
            return view('auth.register');
        } else {

            return redirect()->route('checkout');
        }

    }

    public function checkout()
    {
        if (auth()->user()->hasPlan()) {
            resolve(StorageInterface::class)->clear();
            return redirect()->route('youHaveEarlyAccount');
        }
        $page = DB::table('page_content')->where('name', 'checkout')->first();
        return view('checkout', compact('page'));
    }


    function tankspage()
    {


        $this->transaction->checkout();
        resolve(StorageInterface::class)->clear();
        return view('tanks');

    }

    function youHaveEarlyAccount()
    {
        return view('youHaveEarlyAccount');
    }

}

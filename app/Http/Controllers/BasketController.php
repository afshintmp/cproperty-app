<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Services\Basket\Basket;
use App\Services\Payment\Transaction;
use App\Services\Storage\Contracts\StorageInterface;
use App\Services\Storage\SessionStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    private $basket;

    private $transaction;

    public function __construct(Basket $basket, Transaction $transaction)
    {
        $this->basket = $basket;
        $this->transaction = $transaction;
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

        $this->transaction->checkout();
        $plan = (resolve(StorageInterface::class)->get('plan'));
        $plan = Plan::find($plan);
        $page = DB::table('page_content')->where('name', 'checkout')->first();
        return view('checkout', compact('plan', 'page'));
    }
}

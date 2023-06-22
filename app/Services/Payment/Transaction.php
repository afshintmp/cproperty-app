<?php

namespace App\Services\Payment;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Plan;
use App\Services\Basket\Basket;
use App\Services\Basket\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class Transaction
{
    private $request;
    private $basket;
    private $cart;

    public function __construct(Request $request, Basket $basket, Cart $cart)
    {

        $this->request = $request;

        $this->basket = $basket;
        $this->cart = $cart;
    }

    public function checkout()
    {

        $order = $this->makeOrder();
        $payment = $this->makePayments($order);
        $plan = $this->addPlanToUser($order);
//        auth()->user()->addPlanToUser($order);
//        $this->basket->clear();

        return $order;
    }

    private function makeOrder()
    {

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'code' => bin2hex(Str::random(16)),
            'price' => $this->cart->total(),
            'plan_id' => $this->basket->plan(),
        ]);

        return $order;
    }

    private function makePayments($order)
    {
        $payment = Payment::create([
            'order_id' => $order->id,
            'amount' => $order->price,
            'status' => 1,
            'gateway' => 'test',
            'ref_num' => 123456789
        ]);
        return $payment;
    }

    private function addPlanToUser($order)
    {

        $plan = $this->basket->plan();
        $plan_time = Plan::where('id', $plan)->first()->time_credit;
        auth()->user()->addPlanToUser($plan , Carbon::now() , Carbon::now()->addMonth($plan_time));

    }
}

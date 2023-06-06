<?php

namespace App\Services\Payment;

use App\Models\Order;
use App\Models\Payment;
use App\Services\Basket\Basket;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class Transaction
{
    private $request;
    private $basket;

    public function __construct(Request $request, Basket $basket)
    {

        $this->request = $request;

        $this->basket = $basket;
    }

    public function checkout()
    {
        $order = $this->makeOrder();
        $payment = $this->makePayments($order);

        $this->basket->clear();

        return $order;
    }

    private function makeOrder()
    {

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'code' => bin2hex(Str::random(16)),
            'price' => $this->basket->subTotal(),
            'plan_id' => $this->basket->plan(),
        ]);

        return $order;
    }

    private function makePayments($order)
    {
        $payment = Payment::create([
            'order_id' => $order->id,
            'amount' => $order->price,


        ]);
        return $payment;
    }
}

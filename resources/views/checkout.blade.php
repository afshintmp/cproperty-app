@extends('app')
@section('custom-head')
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
@endsection
@section('content')

    <div class="container">

        <div class="row">

        </div>


        <div class="row">
            <div class="col-4">
                <div class=" pe-1 ps-1">
                    <h4>Rules</h4>
                    <div class="login-end-cart condition-parent box-shadow-login p-4">

                        <p class="custom-scroll-bar text-4a">The subscription fee for accessing our services may vary
                            based
                            on the chosen subscription
                            duration and features. All subscription fees are non-refundable. Once a payment is made, no
                            refunds will be provided, regardless of whether you choose to cancel your subscription or
                            discontinue using our services before the end of the subscription period.
                            The subscription fee for accessing our services may vary based on the chosen subscription
                            duration and features. All subscription fees are non-refundable. Once a payment is made, no
                            refunds will be provided, regardless of whether you choose to cancel your subscription or
                            discontinue using our services before the end of the subscription period.
                            The subscription fee for accessing our services may vary based on the chosen subscription
                            duration and features. All subscription fees are non-refundable. Once a payment is made, no
                            refunds will be provided, regardless of whether you choose to cancel your subscription or
                            discontinue using our services before the end of the subscription period.
                            The subscription fee for accessing our services may vary based on the chosen subscription
                            duration and features. All subscription fees are non-refundable. Once a payment is made, no
                            refunds will be provided, regardless of whether you choose to cancel your subscription or
                            discontinue using our services before the end of the subscription period.
                            The subscription fee for accessing our services may vary based on the chosen subscription
                            duration and features. All subscription fees are non-refundable. Once a payment is made, no
                            refunds will be provided, regardless of whether you choose to cancel your subscription or
                            discontinue using our services before the end of the subscription period.</p>


                        <label class="custom-check-box term-condition-checkbox">I have read and agree the terms of
                            service
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                </div>
            </div>
            <div class="col-4">
                <div class=" pe-1 ps-1">
                    <h4>Payment Method</h4>
                    <div class="login-end-cart checkout-cart box-shadow-login p-4">
                        <div>
                            <div class="payment-method">
                                <label class="custom-check-box">
                                    <img src="{{asset('img/paypal.svg')}}" alt="">
                                    <input type="radio" checked name="gatway">
                                    <span class="radiomark"></span>
                                </label>

                            </div>
                            <div class="payment-method">
                                <label class="custom-check-box">
                                    <img src="{{asset('img/paypal.svg')}}" alt="">
                                    <input type="radio" name="gatway">
                                    <span class="radiomark"></span>
                                </label>

                            </div>
                            <div class="payment-method">
                                <label class="custom-check-box">
                                    <img src="{{asset('img/paypal.svg')}}" alt="">
                                    <input type="radio" name="gatway">
                                    <span class="radiomark"></span>
                                </label>

                            </div>
                            <div class="payment-method">
                                <label class="custom-check-box">
                                    <img src="{{asset('img/paypal.svg')}}" alt="">
                                    <input type="radio" name="gatway">
                                    <span class="radiomark"></span>
                                </label>

                            </div>
                        </div>

                        <div class="payment-info checkout-cart-footer">
                            <p class="mb-0 pb-0">
                                Having trouble with your payment?
                                <a href="">
                                    Please check <strong> this article </strong>
                                </a>

                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-4">
                <div class=" pe-1 ps-1">
                    <h4>Order details</h4>
                    <div class="login-end-cart price-table-sec checkout-cart  box-shadow-login p-4">
                        <div>
                            <p class="price-table-title">{{$plan->title}}</p>
                            <table class="price-table top-table">
                                <tr>
                                    <td>
                                        <p>
                                            Annual subscription
                                        </p>
                                    </td>
                                    <td>
                                        <p class="fw-bold text-green">
                                            {{$plan->price}} <span>Dollar</span>
                                        </p>
                                    </td>
                                </tr>
                                @if(0 == 1)
                                    <tr>
                                        <td>
                                            <p>
                                                GST/Sales taxes (5%)
                                            </p>
                                        </td>
                                        <td class="">
                                            <p class="fw-bold text-green">
                                                20 <span>Dollar</span>
                                            </p>
                                        </td>
                                    </tr>
                                @endif
                            </table>
                            <table class="price-table">
                                <tr>
                                    <td>
                                        <p class="price-total">
                                            Total
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-green fw-bold">
                                            {{$plan->price}}  <span>Dollar</span>
                                        </p>
                                    </td>
                                </tr>

                            </table>
                        </div>
                        <div>
                            <input class="form-control mb-3" placeholder="type promo code if you have">
                            <input type="submit" class="btn-green w-100 text-center" value="Confirm and pay">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection



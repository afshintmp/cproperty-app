@extends('app')
@section('custom-head')
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
@endsection
@section('content')
    @inject('cart' , 'App\Services\Basket\Cart')
    @inject('basket' , 'App\Services\Basket\Basket')
    @inject('coupon' , 'App\Services\Basket\Coupon')

    <div class="container mt-70">

        <div class="row">

        </div>


        <div class="row">
            <div class="col-12 col-md-4">
                <div class=" pe-1 ps-1">
                    <h4 class="login-end-cart-title">Rules</h4>
                    <div class="login-end-cart condition-parent box-shadow-login p-4">

                        <div class="custom-scroll-bar text-4a">
                            {!! $page?->content !!}
                        </div>


                        <label class="custom-check-box term-condition-checkbox">I have read and agree the terms of
                            service
                            <input type="checkbox" required>
                            <span class="checkmark"></span>
                        </label>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class=" pe-1 ps-1">
                    <h4 class="login-end-cart-title">Payment Method</h4>
                    <div class="login-end-cart checkout-cart box-shadow-login p-4">
                        <div>
                            <div class="payment-method">
                                <label class="custom-check-box">
                                    develop test
                                    <input type="radio" checked name="gatway" value="test">
                                    <span class="radiomark"></span>
                                </label>

                            </div>
                            <div class="payment-method">
                                <label class="custom-check-box">
                                    <img src="{{asset('img/paypal.svg')}}" alt="">
                                    <input type="radio" name="gatway" value="paypal">
                                    <span class="radiomark"></span>
                                </label>

                            </div>
                            <div class="payment-method">
                                <label class="custom-check-box">
                                    <img src="{{asset('img/paypal.svg')}}" alt="">
                                    <input type="radio" name="gatway" value="googlepay">
                                    <span class="radiomark"></span>
                                </label>

                            </div>
                            <div class="payment-method">
                                <label class="custom-check-box">
                                    <img src="{{asset('img/paypal.svg')}}" alt="">
                                    <input type="radio" name="gatway" value="else">
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
            <div class="col-12 col-md-4">
                <div class=" pe-1 ps-1">
                    <h4 class="login-end-cart-title">Order details</h4>
                    <div class="login-end-cart price-table-sec checkout-cart  box-shadow-login p-4">
                        <div>
                            <p class="price-table-title d-inline-block">{{$basket->getName()}}</p>

                            <div class="clear-fix"></div>
                            <table class="price-table top-table">
                                <tr>
                                    <td>
                                        <p>
                                            {{$basket->getSummery()}} subscription
                                        </p>
                                    </td>
                                    <td>
                                        <p class="fw-bold text-green">
                                            {{$basket->subTotal()}} <span>Dollar</span>
                                        </p>
                                    </td>
                                </tr>
                                @if(session()->has('coupon'))
                                    <tr>
                                        <form action="{{route('coupon.remove')}}" method="get">
                                            <td>
                                                <p>
                                                    {!! $coupon->getCouponName() !!}
                                                </p>
                                            </td>
                                            <td class="">
                                                <p class="fw-bold text-green d-inline-block">
                                                    {{$coupon->getCouponDiscount()}} <span>Dollar</span>
                                                </p>
                                            </td>
                                        </form>
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
                                            {{$cart->total()}} <span>Dollar</span>
                                        </p>
                                    </td>
                                </tr>

                            </table>
                        </div>

                        <div>
                            @if(!session()->has('coupon'))
                                <form action="{{route('coupon')}}" method="post">
                                    {{csrf_field()}}
                                    @if(session('promo_error'))

                                        <div class="alert alert-danger">
                                            {{session('promo_error')}}
                                        </div>
                                    @endif
                                    @if(session('promo_success'))

                                        <div class="alert alert-success">
                                            {{session('promo_success')}}
                                        </div>
                                    @endif
                                    <table>
                                        <tr>
                                            <td>
                                                <input class="form-control mb-3 outline-none" name="coupon"
                                                       placeholder="type promo code if you have">
                                            </td>
                                            <td class="vertical-top">
                                                <input type="submit" class="c-btn-one add-promo-code" name="promo"
                                                       value="submit">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            @endif
                            <form action="{{route('tanks')}}">
                                <input type="submit" class="btn-green w-100 text-center" value="Confirm and pay">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection



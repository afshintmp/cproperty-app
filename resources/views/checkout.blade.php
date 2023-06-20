@extends('app')
@section('custom-head')
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
@endsection
@section('content')
    @inject('cost' , 'App\Services\Cost\Contracts\CostInterface')
    @inject('basket' , 'App\Services\Basket\Basket')
    @inject('coupon' , 'App\Services\Basket\Coupon')
{{--    {{dd($basket->getSummery())}}--}}
    {{$coupon->total()}}
    <div class="container">

        <div class="row">

        </div>


        <div class="row">
            <div class="col-4">
                <div class=" pe-1 ps-1">
                    <h4>Rules</h4>
                    <div class="login-end-cart condition-parent box-shadow-login p-4">

                        <div class="custom-scroll-bar text-4a">
                            {!! $page->content !!}
                        </div>


                        <label class="custom-check-box term-condition-checkbox">I have read and agree the terms of
                            service
                            <input type="checkbox" required>
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
            <div class="col-4">
                <div class=" pe-1 ps-1">
                    <h4>Order details</h4>
                    <div class="login-end-cart price-table-sec checkout-cart  box-shadow-login p-4">
                        <div>
                            <p class="price-table-title">{{$plan->title}}</p><span><a href="">change plan</a></span>
                            <table class="price-table top-table">
                                <tr>
                                    <td>
                                        <p>
                                            {{$plan->tag}} subscription
                                        </p>
                                    </td>
                                    <td>
                                        <p class="fw-bold text-green">
                                            {{$plan->price}} <span>Dollar</span>
                                        </p>
                                    </td>
                                </tr>
                                @if(session()->has('coupon'))
                                    <tr>
                                        <form action="{{route('coupon.remove')}}" method="get">
                                            <td>
                                                <p>
                                                    {{session()->get('coupon')->code}}
                                                </p>
                                            </td>
                                            <td class="">
                                                <p class="fw-bold text-green">
                                                    <input type="submit" value="delete">
                                                </p>
                                            </td>
                                        </form>
                                    </tr>
                                @endif

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
                                            {{$plan->price}} <span>Dollar</span>
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
                                    <input class="form-control mb-3" name="coupon"
                                           placeholder="type promo code if you have">
                                    <input type="submit" name="promo" value="submit">
                                </form>
                            @endif
                            <input type="submit" class="btn-green w-100 text-center" value="Confirm and pay">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection



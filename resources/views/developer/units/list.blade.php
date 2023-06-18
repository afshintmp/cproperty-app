@extends('app')
@section('content')
    <x-developer.developer-bar active="developer"></x-developer.developer-bar>

    <div class="bread-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brardcurmbs">
                        <p>
                            Dashboard
                        </p>
                        <span>
                >
            </span>
                        <p>
                            Profile
                        </p>
                        <span>
                >
            </span>
                        <p>
                            Edit Profile
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="search-bar view-project-search-bar">

                    <div class="d-inline-block">
                        <div class="sorted-list d-inline-block position-relative">
                            <button class="btn-brown search-bar-sort f-regular">
                                sorted : Most View
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            </button>
                            <div class="sorted-list-sec">
                                <ul>
                                    <li>
                                        <a href="">
                                            <img src="assets/img/eye-open-s-l.svg" alt="">
                                            most view</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="assets/img/shape-un.svg" alt="">
                                            least view</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="assets/img/Frame%20201.svg" alt="">
                                            alphabet Asc.</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="assets/img/Component%201.svg" alt="">
                                            alphabet Dsc.</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a class="d-inline-block btn-orange search-bar-sort f-regular  ml-10">

                            Back To Dashboard

                        </a>

                    </div>
                    <div class="d-inline-block float-end">
                        <div class="search-bar-input f-regular">
                            <input type="text" class="">

                            <div class="search-bar-btn">
                            <span>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.58317 18.1251C4.87484 18.1251 1.0415 14.2917 1.0415 9.58342C1.0415 4.87508 4.87484 1.04175 9.58317 1.04175C14.2915 1.04175 18.1248 4.87508 18.1248 9.58342C18.1248 14.2917 14.2915 18.1251 9.58317 18.1251ZM9.58317 2.29175C5.55817 2.29175 2.2915 5.56675 2.2915 9.58342C2.2915 13.6001 5.55817 16.8751 9.58317 16.8751C13.6082 16.8751 16.8748 13.6001 16.8748 9.58342C16.8748 5.56675 13.6082 2.29175 9.58317 2.29175Z"
                                        fill="#4A5568"/>
                                    <path
                                        d="M18.3335 18.9583C18.1752 18.9583 18.0169 18.9 17.8919 18.775L16.2252 17.1083C15.9835 16.8666 15.9835 16.4666 16.2252 16.225C16.4669 15.9833 16.8669 15.9833 17.1085 16.225L18.7752 17.8916C19.0169 18.1333 19.0169 18.5333 18.7752 18.775C18.6502 18.9 18.4919 18.9583 18.3335 18.9583Z"
                                        fill="#4A5568"/>
                                </svg>
                            </span>
                                <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4 5L10 5M10 5C10 6.10457 10.8954 7 12 7C13.1046 7 14 6.10457 14 5M10 5C10 3.89543 10.8954 3 12 3C13.1046 3 14 3.89543 14 5M14 5L20 5M4 12H16M16 12C16 13.1046 16.8954 14 18 14C19.1046 14 20 13.1046 20 12C20 10.8954 19.1046 10 18 10C16.8954 10 16 10.8954 16 12ZM8 19H20M8 19C8 17.8954 7.10457 17 6 17C4.89543 17 4 17.8954 4 19C4 20.1046 4.89543 21 6 21C7.10457 21 8 20.1046 8 19Z"
                                        stroke="#FF9900" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>

                            </span>

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="unit-title-section">
                        <h3 class="unit-title-section-main">phases:</h3>
                    </div>
                    @foreach($build->phases as $phase)
                        <div class="unit-title-section">

                            <h3 class="unit-title-section-main unit-title-section-phase ">{{$phase->type .','.$phase->name}}
                                :</h3>

                        </div>



                        @foreach($phase->unit_sort as $floor=>$units)
                            <div class="unit-title-section">
                                <h3 class="unit-title-section-main unit-title-section-floor ">
                                    {{ $floor }}:
                                </h3>
                            </div>
                            <div class="row">
                                @foreach($units as $unit)
                                    <div class="col-3">
                                        <div class="unit-developer-cart">
                                            <div class="floor-delete text-end">
                                                <img src="{{asset('img/cross-circle.svg')}}" alt="">
                                            </div>
                                            <div class="floor-image">
                                                <img src="{{asset('storage') .'/' .$unit['floor_plan']}}" alt="">
                                            </div>
                                            <div>
                                                <p class="unit-developer-cart-price">
                                                    <img src="{{asset('img/moneygreen.svg')}}" alt="">

                                                    $<?php echo number_format($unit['price'] , '0' ,'.' ,',') ?>
                                                </p>

                                                <p class="unit-developer-cart-type">
                                                    <img src="{{asset('img/image%2042(2).svg')}}" alt="">

                                                    {{$unit['phase']}}
                                                </p>
                                                <p class="unit-developer-cart-floor">
                                                    <img src="{{ asset('img/house-building%202.svg') }}" alt="">

                                                    Floor{{$unit['floor']}}
                                                </p>
                                            </div>
                                            <div class="unit-developer-cart-btn">
                                                <button class="btn-brown d-block w-100 mt-11">
                                                    <a class="font-regular" href="">edit availability</a>
                                                </button>
                                                <button class="btn-green d-block w-100 mt-11">
                                                    <a class="font-regular" href="">view information</a>
                                                </button>
                                            </div>

                                        </div>

                                    </div>
                                @endforeach
                                @endforeach
                            </div>
                        @endforeach


                </div>
            </div>
            </div>
        </div>
    </div>

    </div>
@endsection

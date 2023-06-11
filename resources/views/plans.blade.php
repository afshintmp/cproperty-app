@extends('app')

@section('content')
    @parent






    <div class="dreamstm">
        <div class="container">
            <div class="row pt-5">
                <div class="col-12 col-md-5">

                    <img src="{{asset('img/Group 1000004540.png')}}" class="w-100"/>
                </div>
                <div class="col-md-7 col-12  d-flex align-items-center pr-34">
                    <div class="align-items-center">
                        <h2 class="dreamstm-title mb-35">
                            Get a Premium Account
                        </h2>
                        <p class="text-00 dreamstm-text--">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua.
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="plans position-relative m-90 ">

        <div class="container h-100 position-relative">
            <div class="--1 right-cart">

                <div class="plan-main">
                    <div class="">
                        <div class="plan-head">
                            <h3 class="plan-title">Enhanced</h3>

                            <span class="plan-sub-title">3 Mounth</span>
                            <div class="clear-fix"></div>
                        </div>
                        <div class="plan-body info-- text-00">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>


                        </div>
                        <div class="plans-info">
                            <span class="plans-price">250$</span>
                            <button class="plans-add-to-cart btn-green">
                                <a href="">
                                    add to card
                                </a>
                            </button>
                            <div class="clear-fix"></div>
                        </div>
                    </div>
                    <div class="plan-main-shodow">

                    </div>
                </div>


            </div>
            <div class="--2 inshow ">
                <div class="plan-main">
                    <div class="">
                        <div class="plan-head">
                            <h3 class="plan-title">Enhanced</h3>

                            <span class="plan-sub-title">Annual</span>
                            <div class="clear-fix"></div>
                        </div>
                        <div class="plan-body info-- text-00">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>


                        </div>
                        <div class="plans-info">
                            <span class="plans-price">250$</span>
                            <button class="plans-add-to-cart btn-green">
                                <a href="">
                                    add to card
                                </a>
                            </button>
                            <div class="clear-fix"></div>
                        </div>
                    </div>
                    <div class="plan-main-shodow">

                    </div>
                </div>

            </div>
        </div>
        <div class="bottom-bar"></div>
    </div>


    <div class="plans position-relative ">

        <div class="container h-100 position-relative">
            <div class="--1 right-cart">

                <div class="plan-main">
                    <div class="">
                        <div class="plan-head">
                            <h3 class="plan-title">Enhanced</h3>

                            <span class="plan-sub-title">3 Mounth</span>
                            <div class="clear-fix"></div>
                        </div>
                        <div class="plan-body info--">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>


                        </div>
                        <div class="plans-info">
                            <span class="plans-price">250$</span>
                            <button class="plans-add-to-cart btn-green">
                                <a href="">
                                    add to card
                                </a>
                            </button>
                            <div class="clear-fix"></div>
                        </div>
                    </div>
                    <div class="plan-main-shodow">

                    </div>
                </div>


            </div>
            <div class="--2 inshow ">
                <div class="plan-main">
                    <div class="">
                        <div class="plan-head">
                            <h3 class="plan-title">Enhanced</h3>

                            <span class="plan-sub-title">Annual</span>
                            <div class="clear-fix"></div>
                        </div>
                        <div class="plan-body info--">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>


                        </div>
                        <div class="plans-info">
                            <span class="plans-price">250$</span>
                            <button class="plans-add-to-cart btn-green">
                                <a href="">
                                    add to card
                                </a>
                            </button>
                            <div class="clear-fix"></div>
                        </div>
                    </div>
                    <div class="plan-main-shodow">

                    </div>
                </div>

            </div>
        </div>
        <div class="bottom-bar"></div>
    </div>

@endsection

@section('custom-script')

    <script>
        jQuery('.--1').on('mouseover', function () {

            jQuery(this).parent().find('.--2').removeClass('inshow')
            jQuery(this).addClass('inshow')
        })
        jQuery('.--2').on('mouseover', function () {

            jQuery(this).parent().find('.--1').removeClass('inshow')
            jQuery(this).addClass('inshow')
        })
    </script>
@endsection

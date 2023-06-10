@extends('app')

@section('content')
    @parent





    <div class="dreamstm">
        <div class="container">
            <div class="row pt-5">
                <div class="col-5 ps-5 pe-5">

                    <img src="assets/img/Group 1000004540.png" class="w-100"/>
                </div>
                <div class="col-7  d-flex align-items-center p-5">
                    <div class="align-items-center">
                        <h2 class="dreamstm-title mb-4">
                            Get a Premium Account
                        </h2>
                        <p class="text-4a">
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
    <style>
        .--1,
        .--2 {
            bottom: 0;
        }

        .--1 {

            position: absolute;
            right: 0;
            width: calc(35% + 32px);
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            z-index: 2;
        }

        .--2 {
            position: absolute;
            left: 0;
            width: calc(35% + 32px);
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            z-index: 2;
        }


        .inshow {
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            width: 65%;
            z-index: 1;
        }


        .plan-main {
            width: 100%;
        }

        .inshow .plans-info,
        .inshow .plan-body > p {
            display: block;
        }

        .plan-body > p {
            display: none;
        }

        .bottom-bar {
            background: rgba(74, 85, 104, 1);
            width: 100%;
            position: absolute;
            height: 80px;
            left: 0;

            bottom: 0;
        }

        .inshow .plan-main::after {
            display: block;
        }

        .inshow .plan-body {
            height: unset;
            -webkit-transition: all 3s ease-in-out;
            -moz-transition: all 3s ease-in-out;
            -o-transition: all 3s ease-in-out;
            transition: all 3s ease-in-out;
        }

        .plan-body {
            height: 0;
            -webkit-transition: all 3s ease-in-out;
            -moz-transition: all 3s ease-in-out;
            -o-transition: all 3s ease-in-out;
            transition: all 3s ease-in-out;
        }

        .plan-main::after {
            display: none;
        }

        .right-cart .plan-main::after {
            left: unset;
            right: 0;
        }

        .plans {
            height: 380px;
        }

        .plans-info {
            display: none;
        }

        .plan-head {
            border-bottom: unset;
        }

        .plan-head .plan-sub-title {
            float: unset;
            text-align: center;
            margin-top: 16px;
            display: block;
        }

        .plan-head .plan-title {
            display: block;
            text-align: center;
        }

        .inshow .plan-head {
            border-bottom: 1px solid #000;
        }

        .inshow .plan-head .plan-sub-title {
            display: inline-block;
            margin-top: 0px;
            float: right;
        }

        .inshow .plan-head .plan-title {
            display: inline-block;
        }

        .border {
            border: 1px solid #000;
        }

        .info-- {
            overflow: hidden;
            height: 0;
            padding: 0;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .inshow .info-- {
            padding-top: 32px;
            padding-bottom: 32px;
            height: 150px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .--1,
        .--2 {
            bottom: 40px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .inshow.--1,
        .inshow.--2 {
            bottom: 0;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .inshow .plan-main-shodow::after {
            display: block;
        }

        .inshow .plan-main-shodow {
            height: 80px !important;
            box-shadow: inset 0 -41px 27px 0 rgba(74, 85, 104, 0.5);
        }

        .plan-main-shodow::after {
            display: none;
        }

        .plan-main-shodow {
            height: 40px;
            box-shadow: inset -8px -17px 18px -1px rgba(74, 85, 104, 0.5);
        }
    </style>


    <div class="plans position-relative mb-5">

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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
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




    <div class="plans position-relative">

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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
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

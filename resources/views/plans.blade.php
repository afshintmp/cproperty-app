@extends('app')

@section('content')
    @parent



    <div class="container">
        <div class="row">
            <div class="col-5">

                <img src="{{asset('img/Group 1000004540.png')}}" class="w-100"/>
            </div>
            <div class="col-7">
                <h3 class="text-4a">Get a Premium Account</h3>
                <p class="text-4a">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur.
                </p>
            </div>
        </div>


        <div class="row mt-5">
            @foreach($plans as $plan)

                <div class="plan-cart">
                    <div class="plan-main">
                        <div class="">
                            <div class="plan-head">
                                <h3 class="plan-title">{{$plan->title}}</h3>

                                <span class="plan-sub-title">Annual</span>
                                <div class="clear-fix"></div>
                            </div>
                            <div class="plan-body">
                                <p>
                                    {{$plan->description}}
                                </p>


                            </div>
                            <div class="">
                                <span class="plans-price">{{$plan->price}}$</span>
                                <button class="plans-add-to-cart btn-green">
                                    <a href="{{route('basket.add' , $plan->id)}}">add
                                        to card
                                    </a>
                                </button>
                                <div class="clear-fix"></div>
                            </div>
                        </div>
                        <div class="plan-main-shodow">

                        </div>
                    </div>
                    <div class="plan-alter">
                        <p class="plan-alter-title">
                            Enhanced
                        </p>
                        <p class="plan-alter-creadit">
                            3 month
                        </p>

                        <div class="plan-alter-shodow">

                        </div>
                    </div>
                    <div></div>
                </div>

            @endforeach


        </div>

    </div>

@endsection

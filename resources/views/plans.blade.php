@extends('app')

@section('content')
    @parent



    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-5">

                <img src="{{asset('img/Group 1000004540.png')}}" class="w-100"/>
            </div>
            <div class="col-12 col-md-7  d-flex align-items-center p-md-5">
                <div class="align-items-center">
                    <h2 class="dreamstm-title mb-4 text-center text-md-start mt-2 mt-md-0">
                        Get A Premium Account
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


        <div class="row mt-2 mt-md-5">
            @foreach($plans as $plan)

                <div class="plan-cart">
                    <div class="plan-main">
                        <div class="">
                            <div class="plan-head">
                                <h3 class="plan-title">{{$plan->title}}</h3>

                                <span class="plan-sub-title">{{$plan->tag}}</span>
                                <div class="clear-fix"></div>
                            </div>
                            <div class="plan-body">

                                    {!! $plan->description !!}

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
                            {{$plan->tag}}
                        </p>
                        <p class="plan-alter-creadit">
                            {{$plan->time_credit}} month
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

@extends('app')

@section('content')
    @parent






    <div class="dreamstm">
        <div class="container">
            <div class="row pt-5">
                <div class="col-12 col-md-5">
                    @if(!empty($page->image))

                        <img src="{{asset('storage/' .$page->image)}}" class="w-100"/>

                    @else
                        <img src="{{asset('img/Group 1000004540.png')}}" class="w-100"/>
                    @endif
                </div>
                <div class="col-md-7 col-12  d-flex align-items-center pr-34">
                    <div class="align-items-center">
                        <h2 class="dreamstm-title mb-35">
                            {{$page->title}}
                        </h2>
                        <p class="text-00 dreamstm-text--">
                            {!! $page->content !!}
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
                            {!! $enhanced->description !!}
                        </div>
                        <div class="plans-info">
                            <span class="plans-price">{{ $enhanced->price }}$</span>
                            <button class="plans-add-to-cart btn-green">
                                <a href="{{route('basket.add',$enhanced->id)}}">
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
                            {!! $annualEnhanced->description !!}
                        </div>
                        <div class="plans-info">
                            <span class="plans-price">{{ $annualEnhanced->price}}$</span>
                            <button class="plans-add-to-cart btn-green">
                                <a href="{{route('basket.add',$annualEnhanced->id)}}">
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
                            <h3 class="plan-title">Starter</h3>

                            <span class="plan-sub-title">3 Mounth</span>
                            <div class="clear-fix"></div>
                        </div>
                        <div class="plan-body info--">
                            {!! $starter->description !!}

                        </div>
                        <div class="plans-info">
                            <span class="plans-price">{{$starter->price}}$</span>
                            <button class="plans-add-to-cart btn-green">
                                <a href="{{route('basket.add',$starter->id)}}">
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
                            <h3 class="plan-title">Starter</h3>

                            <span class="plan-sub-title">Annual</span>
                            <div class="clear-fix"></div>
                        </div>
                        <div class="plan-body info--">
                            {!! $annualStarter->description !!}
                        </div>
                        <div class="plans-info">
                            <span class="plans-price">{{$annualStarter->price}}$</span>
                            <button class="plans-add-to-cart btn-green">
                                <a href="{{route('basket.add',$annualStarter->id)}}">
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

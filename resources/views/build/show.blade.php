@extends('app')
@section('custom-head')
    @parent
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
@endsection


@section('content')
    @parent


    <div class="container">
        <div class="row">
            <div class="col-4">
                <style>


                    .swiper {
                        width: 100%;
                        height: 100%;
                    }

                    .swiper-slide {
                        text-align: center;
                        font-size: 18px;
                        background: #fff;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .swiper-slide img {
                        display: block;
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }


                    .swiper {
                        width: 100%;
                        height: 300px;
                        margin-left: auto;
                        margin-right: auto;
                    }

                    .swiper-slide {
                        background-size: cover;
                        background-position: center;
                    }

                    .mySwiper2 {
                        height: 80%;
                        width: 100%;
                    }

                    .mySwiper {
                        height: 20%;
                        box-sizing: border-box;
                        padding: 10px 0;
                    }

                    .mySwiper .swiper-slide {
                        width: 25%;
                        height: 100%;
                        opacity: 0.4;
                    }

                    .mySwiper .swiper-slide-thumb-active {
                        opacity: 1;
                    }

                    .swiper-slide img {
                        display: block;
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }
                </style>
                <div class="">


                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                         class="swiper mySwiper2 overflow-show-c">
                        <div class="swiper-wrapper overflow-hidden-c">
                            <div class="swiper-slide">
                                <img src="{{$build->cover_image->slug}}" alt="{{$build->cover_image->alt_text}}"/>
                            </div>


                            @foreach($build->image_gallery as $photo)

                                <div class="swiper-slide">
                                    <img src="{{$photo->slug}}" alt="{{$build->cover_image->alt_text}}"/>
                                </div>
                            @endforeach

                        </div>

                        <div class="swiper-button-prev">
                            <svg width="68" height="68" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.56994 18.8201C9.37994 18.8201 9.18994 18.7501 9.03994 18.6001L2.96994 12.5301C2.67994 12.2401 2.67994 11.7601 2.96994 11.4701L9.03994 5.40012C9.32994 5.11012 9.80994 5.11012 10.0999 5.40012C10.3899 5.69012 10.3899 6.17012 10.0999 6.46012L4.55994 12.0001L10.0999 17.5401C10.3899 17.8301 10.3899 18.3101 10.0999 18.6001C9.95994 18.7501 9.75994 18.8201 9.56994 18.8201Z"
                                    fill="white"/>
                                <path
                                    d="M20.4999 12.75H3.66992C3.25992 12.75 2.91992 12.41 2.91992 12C2.91992 11.59 3.25992 11.25 3.66992 11.25H20.4999C20.9099 11.25 21.2499 11.59 21.2499 12C21.2499 12.41 20.9099 12.75 20.4999 12.75Z"
                                    fill="white"/>
                            </svg>

                        </div>
                    </div>


                </div>

            </div>

            <div class="col-4">
                <h1 class="b-title fs-3 mb-2">{{$build->name}}</h1>
                <div class="price mb-3">
                    <div class="price-wrapper d-inline-block">
                        <span class="price-head p-1">from</span>
                        <p class="price-field fw-bold mt-1 mb-0 ">
                            $0 </p>
                    </div>
                    <div class="ms-3 price-wrapper d-inline-block">
                        <span class="price-head p-1">from</span>
                        <p class="price-field fw-bold mt-1 mb-0 ">
                            $560000
                        </p>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="fw-bold color-4a">
                        <span>
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.50005 8.85624C6.1688 8.85624 5.0813 7.77499 5.0813 6.43749C5.0813 5.09999 6.1688 4.02499 7.50005 4.02499C8.8313 4.02499 9.9188 5.10624 9.9188 6.44374C9.9188 7.78124 8.8313 8.85624 7.50005 8.85624ZM7.50005 4.96249C6.68755 4.96249 6.0188 5.62499 6.0188 6.44374C6.0188 7.26249 6.6813 7.92499 7.50005 7.92499C8.3188 7.92499 8.9813 7.26249 8.9813 6.44374C8.9813 5.62499 8.31255 4.96249 7.50005 4.96249Z"
                                    fill="#4A5568"/>
                                <path
                                    d="M7.50005 14.225C6.57505 14.225 5.6438 13.875 4.9188 13.1812C3.07505 11.4062 1.03755 8.575 1.8063 5.20625C2.50005 2.15 5.1688 0.78125 7.50005 0.78125C7.50005 0.78125 7.50005 0.78125 7.5063 0.78125C9.83755 0.78125 12.5063 2.15 13.2 5.2125C13.9625 8.58125 11.925 11.4062 10.0813 13.1812C9.3563 13.875 8.42505 14.225 7.50005 14.225ZM7.50005 1.71875C5.6813 1.71875 3.3438 2.6875 2.72505 5.4125C2.05005 8.35625 3.90005 10.8937 5.57505 12.5C6.6563 13.5437 8.35005 13.5437 9.4313 12.5C11.1 10.8937 12.95 8.35625 12.2875 5.4125C11.6625 2.6875 9.3188 1.71875 7.50005 1.71875Z"
                                    fill="#4A5568"/>
                            </svg>
                        </span>
                        Location : <span>{{ $build->location }}</span>
                    </div>
                    <div class="fw-bold color-4a">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 3.59375C4.74375 3.59375 4.53125 3.38125 4.53125 3.125V1.25C4.53125 0.99375 4.74375 0.78125 5 0.78125C5.25625 0.78125 5.46875 0.99375 5.46875 1.25V3.125C5.46875 3.38125 5.25625 3.59375 5 3.59375Z"
                                fill="#4A5568"/>
                            <path
                                d="M10 3.59375C9.74375 3.59375 9.53125 3.38125 9.53125 3.125V1.25C9.53125 0.99375 9.74375 0.78125 10 0.78125C10.2562 0.78125 10.4688 0.99375 10.4688 1.25V3.125C10.4688 3.38125 10.2562 3.59375 10 3.59375Z"
                                fill="#4A5568"/>
                            <path
                                d="M5.3125 9.06251C5.23125 9.06251 5.15 9.04377 5.075 9.01252C4.99375 8.98127 4.93125 8.93751 4.86875 8.88126C4.75625 8.76251 4.6875 8.60626 4.6875 8.43751C4.6875 8.35626 4.70625 8.27501 4.7375 8.20001C4.76875 8.12501 4.8125 8.05627 4.86875 7.99377C4.93125 7.93752 4.99375 7.89375 5.075 7.8625C5.3 7.76875 5.58125 7.81877 5.75625 7.99377C5.86875 8.11252 5.9375 8.27501 5.9375 8.43751C5.9375 8.47501 5.93125 8.51877 5.925 8.56252C5.91875 8.60002 5.90625 8.63751 5.8875 8.67501C5.875 8.71251 5.85625 8.75001 5.83125 8.78751C5.8125 8.81876 5.78125 8.85001 5.75625 8.88126C5.6375 8.99376 5.475 9.06251 5.3125 9.06251Z"
                                fill="#4A5568"/>
                            <path
                                d="M7.5 9.0625C7.41875 9.0625 7.3375 9.04376 7.2625 9.01251C7.18125 8.98126 7.11875 8.93749 7.05625 8.88124C6.94375 8.76249 6.875 8.60625 6.875 8.4375C6.875 8.35625 6.89375 8.27499 6.925 8.19999C6.95625 8.12499 7 8.05625 7.05625 7.99375C7.11875 7.9375 7.18125 7.89374 7.2625 7.86249C7.4875 7.76249 7.76875 7.81875 7.94375 7.99375C8.05625 8.1125 8.125 8.275 8.125 8.4375C8.125 8.475 8.11875 8.51875 8.1125 8.5625C8.10625 8.6 8.09375 8.6375 8.075 8.675C8.0625 8.7125 8.04375 8.75 8.01875 8.7875C8 8.81875 7.96875 8.84999 7.94375 8.88124C7.825 8.99374 7.6625 9.0625 7.5 9.0625Z"
                                fill="#4A5568"/>
                            <path
                                d="M9.6875 9.0625C9.60625 9.0625 9.525 9.04376 9.45 9.01251C9.36875 8.98126 9.30625 8.93749 9.24375 8.88124C9.21875 8.84999 9.19375 8.81875 9.16875 8.7875C9.14375 8.75 9.125 8.7125 9.1125 8.675C9.09375 8.6375 9.08125 8.6 9.075 8.5625C9.06875 8.51875 9.0625 8.475 9.0625 8.4375C9.0625 8.275 9.13125 8.1125 9.24375 7.99375C9.30625 7.9375 9.36875 7.89374 9.45 7.86249C9.68125 7.76249 9.95625 7.81875 10.1312 7.99375C10.2437 8.1125 10.3125 8.275 10.3125 8.4375C10.3125 8.475 10.3062 8.51875 10.3 8.5625C10.2937 8.6 10.2812 8.6375 10.2625 8.675C10.25 8.7125 10.2313 8.75 10.2063 8.7875C10.1875 8.81875 10.1562 8.84999 10.1312 8.88124C10.0125 8.99374 9.85 9.0625 9.6875 9.0625Z"
                                fill="#4A5568"/>
                            <path
                                d="M5.3125 11.25C5.23125 11.25 5.15 11.2313 5.075 11.2C5 11.1688 4.93125 11.125 4.86875 11.0687C4.75625 10.95 4.6875 10.7875 4.6875 10.625C4.6875 10.5437 4.70625 10.4625 4.7375 10.3875C4.76875 10.3062 4.8125 10.2375 4.86875 10.1813C5.1 9.95 5.525 9.95 5.75625 10.1813C5.86875 10.3 5.9375 10.4625 5.9375 10.625C5.9375 10.7875 5.86875 10.95 5.75625 11.0687C5.6375 11.1812 5.475 11.25 5.3125 11.25Z"
                                fill="#4A5568"/>
                            <path
                                d="M7.5 11.25C7.3375 11.25 7.175 11.1812 7.05625 11.0687C6.94375 10.95 6.875 10.7875 6.875 10.625C6.875 10.5437 6.89375 10.4625 6.925 10.3875C6.95625 10.3062 7 10.2375 7.05625 10.1813C7.2875 9.95 7.7125 9.95 7.94375 10.1813C8 10.2375 8.04375 10.3062 8.075 10.3875C8.10625 10.4625 8.125 10.5437 8.125 10.625C8.125 10.7875 8.05625 10.95 7.94375 11.0687C7.825 11.1812 7.6625 11.25 7.5 11.25Z"
                                fill="#4A5568"/>
                            <path
                                d="M9.6875 11.25C9.525 11.25 9.3625 11.1813 9.24375 11.0688C9.1875 11.0125 9.14375 10.9438 9.1125 10.8625C9.08125 10.7875 9.0625 10.7063 9.0625 10.625C9.0625 10.5438 9.08125 10.4625 9.1125 10.3875C9.14375 10.3063 9.1875 10.2375 9.24375 10.1813C9.3875 10.0375 9.60625 9.96877 9.80625 10.0125C9.85 10.0188 9.8875 10.0313 9.925 10.05C9.9625 10.0625 10 10.0813 10.0375 10.1063C10.0688 10.125 10.1 10.1563 10.1312 10.1813C10.2437 10.3 10.3125 10.4625 10.3125 10.625C10.3125 10.7875 10.2437 10.95 10.1312 11.0688C10.0125 11.1813 9.85 11.25 9.6875 11.25Z"
                                fill="#4A5568"/>
                            <path
                                d="M12.8125 6.14998H2.1875C1.93125 6.14998 1.71875 5.93748 1.71875 5.68123C1.71875 5.42498 1.93125 5.21248 2.1875 5.21248H12.8125C13.0687 5.21248 13.2812 5.42498 13.2812 5.68123C13.2812 5.93748 13.0687 6.14998 12.8125 6.14998Z"
                                fill="#4A5568"/>
                            <path
                                d="M10 14.2188H5C2.71875 14.2188 1.40625 12.9063 1.40625 10.625V5.3125C1.40625 3.03125 2.71875 1.71875 5 1.71875H10C12.2813 1.71875 13.5938 3.03125 13.5938 5.3125V10.625C13.5938 12.9063 12.2813 14.2188 10 14.2188ZM5 2.65625C3.2125 2.65625 2.34375 3.525 2.34375 5.3125V10.625C2.34375 12.4125 3.2125 13.2812 5 13.2812H10C11.7875 13.2812 12.6562 12.4125 12.6562 10.625V5.3125C12.6562 3.525 11.7875 2.65625 10 2.65625H5Z"
                                fill="#4A5568"/>
                        </svg>


                        Completion Date : <span>{{ $build->completion_date }}</span>
                    </div>
                </div>

                <div class="color-97">
                    {{$build->description}}
                </div>


                <div class="container-fluid">
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{$build->cover_image->slug}}"/>
                            </div>
                            @foreach($build->image_gallery as $photo)

                                <div class="swiper-slide">
                                    <img src="{{$photo->slug}}"/>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


            </div>
            <script>
                var swiper = new Swiper(".mySwiper", {
                    loop: true,
                    spaceBetween: 10,
                    slidesPerView: 4,
                    freeMode: true,
                    watchSlidesProgress: true,
                });
                var swiper2 = new Swiper(".mySwiper2", {
                    loop: true,
                    spaceBetween: 10,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    thumbs: {
                        swiper: swiper,
                    },
                });
            </script>

            <div class="col-4">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-70.56068388481569!3d41.45496659976631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e52963ac45bbcb%3A0xf05e8d125e82af10!2sDos%20Mas!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus"
                    style="border:0;width: 100%;" height="360px" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="tabs mt-4 mb-4 shadow-clear fw-bold">
				    <span class="active promotion-head" onclick="showPromotion()">
                        <span class="for-vertical">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="25" height="25" fill="url(#pattern0)"/>
                            <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_75_2576" transform="scale(0.00444444)"/>
                            </pattern>
                            <image id="image0_75_2576" width="225" height="225" xlink:href="data:image/png;base64,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"/>
                            </defs>
                            </svg>
                        </span>
					Promotion</span>
                    <span class="overview-head" onclick="showOverView()">Overview</span>
                    <span class="unit-head" onclick="showUnit()">Units</span>
                    <span>Feature</span>
                    <span>Deposit Structure</span>
                    <span>Developer</span>
                    <span>tabs</span>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-8">
                <div class="box-shadow-one p-3 shadow-clear img-fix color-97" id="pro_tab">

                    <div class="promotion" style="">
                        <img class="mb-2" src="{{$build->promotion_image->slug}}" alt="{{$build->promotion_image->alt_text}}">
                        {{$build->promotion_text}}
                    </div>

                    <div class="overview" style="display: none">
                        <p>
                            <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.99992 15.1666H5.99992C2.37992 15.1666 0.833252 13.6199 0.833252 9.99992V5.99992C0.833252 2.37992 2.37992 0.833252 5.99992 0.833252H9.99992C13.6199 0.833252 15.1666 2.37992 15.1666 5.99992V9.99992C15.1666 13.6199 13.6199 15.1666 9.99992 15.1666ZM5.99992 1.83325C2.92658 1.83325 1.83325 2.92658 1.83325 5.99992V9.99992C1.83325 13.0733 2.92658 14.1666 5.99992 14.1666H9.99992C13.0733 14.1666 14.1666 13.0733 14.1666 9.99992V5.99992C14.1666 2.92658 13.0733 1.83325 9.99992 1.83325H5.99992Z" fill="#292D32"/>
                            <path d="M5.78675 10.22C5.50675 10.22 5.24675 10.1534 5.02008 10.0267C4.46675 9.71338 4.16675 9.09337 4.16675 8.28004V1.62671C4.16675 1.35338 4.39341 1.12671 4.66675 1.12671C4.94008 1.12671 5.16675 1.35338 5.16675 1.62671V8.28004C5.16675 8.71338 5.29342 9.03337 5.51342 9.15337C5.74675 9.28671 6.10675 9.22004 6.50008 8.98671L7.38008 8.46004C7.74008 8.24671 8.25342 8.24671 8.61341 8.46004L9.49341 8.98671C9.89341 9.22671 10.2534 9.28671 10.4801 9.15337C10.7001 9.02671 10.8267 8.70671 10.8267 8.28004V1.62671C10.8267 1.35338 11.0534 1.12671 11.3267 1.12671C11.6001 1.12671 11.8267 1.35338 11.8267 1.62671V8.28004C11.8267 9.09337 11.5267 9.71338 10.9734 10.0267C10.4201 10.34 9.69342 10.2734 8.98008 9.84671L8.10008 9.32004C8.06008 9.29337 7.93341 9.29337 7.89341 9.32004L7.01342 9.84671C6.60008 10.0934 6.17341 10.22 5.78675 10.22Z" fill="#292D32"/>
                            <path d="M9.99992 15.1666H5.99992C2.37992 15.1666 0.833252 13.6199 0.833252 9.99992V5.99992C0.833252 2.37992 2.37992 0.833252 5.99992 0.833252H9.99992C13.6199 0.833252 15.1666 2.37992 15.1666 5.99992V9.99992C15.1666 13.6199 13.6199 15.1666 9.99992 15.1666ZM5.99992 1.83325C2.92658 1.83325 1.83325 2.92658 1.83325 5.99992V9.99992C1.83325 13.0733 2.92658 14.1666 5.99992 14.1666H9.99992C13.0733 14.1666 14.1666 13.0733 14.1666 9.99992V5.99992C14.1666 2.92658 13.0733 1.83325 9.99992 1.83325H5.99992Z" fill="#292D32"/>
                            <path d="M5.78675 10.22C5.50675 10.22 5.24675 10.1534 5.02008 10.0267C4.46675 9.71338 4.16675 9.09337 4.16675 8.28004V1.62671C4.16675 1.35338 4.39341 1.12671 4.66675 1.12671C4.94008 1.12671 5.16675 1.35338 5.16675 1.62671V8.28004C5.16675 8.71338 5.29342 9.03337 5.51342 9.15337C5.74675 9.28671 6.10675 9.22004 6.50008 8.98671L7.38008 8.46004C7.74008 8.24671 8.25342 8.24671 8.61341 8.46004L9.49341 8.98671C9.89341 9.22671 10.2534 9.28671 10.4801 9.15337C10.7001 9.02671 10.8267 8.70671 10.8267 8.28004V1.62671C10.8267 1.35338 11.0534 1.12671 11.3267 1.12671C11.6001 1.12671 11.8267 1.35338 11.8267 1.62671V8.28004C11.8267 9.09337 11.5267 9.71338 10.9734 10.0267C10.4201 10.34 9.69342 10.2734 8.98008 9.84671L8.10008 9.32004C8.06008 9.29337 7.93341 9.29337 7.89341 9.32004L7.01342 9.84671C6.60008 10.0934 6.17341 10.22 5.78675 10.22Z" fill="#292D32"/>
                            </svg>
                            </span>
                            Deposit : {{$build->deposit}}
                        </p>
                        <p>
                            <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.10646 7.74659C6.08646 7.74659 6.07313 7.74659 6.05313 7.74659C6.01979 7.73992 5.97313 7.73992 5.93313 7.74659C3.99979 7.68659 2.53979 6.16659 2.53979 4.29325C2.53979 2.38659 4.09313 0.833252 5.99979 0.833252C7.90646 0.833252 9.45979 2.38659 9.45979 4.29325C9.45313 6.16659 7.98646 7.68659 6.12646 7.74659C6.11979 7.74659 6.11313 7.74659 6.10646 7.74659ZM5.99979 1.83325C4.64646 1.83325 3.53979 2.93992 3.53979 4.29325C3.53979 5.62659 4.57979 6.69992 5.90646 6.74659C5.94646 6.73992 6.03313 6.73992 6.1198 6.74659C7.42646 6.68659 8.45313 5.61325 8.45979 4.29325C8.45979 2.93992 7.35313 1.83325 5.99979 1.83325Z" fill="#292D32"/>
                                    <path d="M11.0263 7.83341C11.0063 7.83341 10.9863 7.83341 10.9663 7.82675C10.693 7.85341 10.413 7.66008 10.3863 7.38675C10.3597 7.11341 10.5263 6.86675 10.7997 6.83341C10.8797 6.82675 10.9663 6.82675 11.0397 6.82675C12.013 6.77341 12.773 5.97341 12.773 4.99341C12.773 3.98008 11.953 3.16008 10.9397 3.16008C10.6663 3.16675 10.4397 2.94008 10.4397 2.66675C10.4397 2.39341 10.6663 2.16675 10.9397 2.16675C12.4997 2.16675 13.773 3.44008 13.773 5.00008C13.773 6.53341 12.573 7.77341 11.0463 7.83341C11.0397 7.83341 11.033 7.83341 11.0263 7.83341Z" fill="#292D32"/>
                                    <path d="M6.11307 15.0334C4.80641 15.0334 3.49307 14.7001 2.49974 14.0334C1.57307 13.4201 1.06641 12.5801 1.06641 11.6667C1.06641 10.7534 1.57307 9.90675 2.49974 9.28675C4.49974 7.96008 7.73974 7.96008 9.72641 9.28675C10.6464 9.90008 11.1597 10.7401 11.1597 11.6534C11.1597 12.5667 10.6531 13.4134 9.72641 14.0334C8.72641 14.7001 7.41974 15.0334 6.11307 15.0334ZM3.05307 10.1267C2.41307 10.5534 2.06641 11.1001 2.06641 11.6734C2.06641 12.2401 2.41974 12.7867 3.05307 13.2067C4.71307 14.3201 7.51307 14.3201 9.17307 13.2067C9.81307 12.7801 10.1597 12.2334 10.1597 11.6601C10.1597 11.0934 9.80641 10.5467 9.17307 10.1267C7.51307 9.02008 4.71307 9.02008 3.05307 10.1267Z" fill="#292D32"/>
                                    <path d="M12.2263 13.8333C11.993 13.8333 11.7863 13.6733 11.7396 13.4333C11.6863 13.16 11.8596 12.9 12.1263 12.84C12.5463 12.7533 12.933 12.5867 13.233 12.3533C13.613 12.0667 13.8196 11.7067 13.8196 11.3267C13.8196 10.9467 13.613 10.5867 13.2396 10.3067C12.9463 10.08 12.5796 9.92001 12.1463 9.82001C11.8796 9.76001 11.7063 9.49335 11.7663 9.22001C11.8263 8.95335 12.093 8.78001 12.3663 8.84001C12.9396 8.96668 13.4396 9.19335 13.8463 9.50668C14.4663 9.97335 14.8196 10.6333 14.8196 11.3267C14.8196 12.02 14.4596 12.68 13.8396 13.1533C13.4263 13.4733 12.9063 13.7067 12.333 13.82C12.293 13.8333 12.2596 13.8333 12.2263 13.8333Z" fill="#292D32"/>
                                    </svg>

                            </span>
                            Assignment : {{$build->assignment}}
                        </p>
                        <p>
                            <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 10.5C6.62 10.5 5.5 9.38 5.5 8C5.5 6.62 6.62 5.5 8 5.5C9.38 5.5 10.5 6.62 10.5 8C10.5 9.38 9.38 10.5 8 10.5ZM8 6.5C7.17333 6.5 6.5 7.17333 6.5 8C6.5 8.82667 7.17333 9.5 8 9.5C8.82667 9.5 9.5 8.82667 9.5 8C9.5 7.17333 8.82667 6.5 8 6.5Z" fill="#292D32"/>
                                    <path d="M10.1399 14.7934C9.99992 14.7934 9.85992 14.7734 9.71992 14.7401C9.30658 14.6268 8.95992 14.3668 8.73992 14.0001L8.65992 13.8668C8.26658 13.1868 7.72658 13.1868 7.33325 13.8668L7.25992 13.9934C7.03992 14.3668 6.69325 14.6334 6.27992 14.7401C5.85992 14.8534 5.42659 14.7934 5.05992 14.5734L3.91325 13.9134C3.50659 13.6801 3.21325 13.3001 3.08659 12.8401C2.96659 12.3801 3.02659 11.9068 3.25992 11.5001C3.45325 11.1601 3.50659 10.8534 3.39325 10.6601C3.27992 10.4668 2.99325 10.3534 2.59992 10.3534C1.62659 10.3534 0.833252 9.56011 0.833252 8.58678V7.41344C0.833252 6.44011 1.62659 5.64678 2.59992 5.64678C2.99325 5.64678 3.27992 5.53344 3.39325 5.34011C3.50659 5.14678 3.45992 4.84011 3.25992 4.50011C3.02659 4.09344 2.96659 3.61344 3.08659 3.16011C3.20659 2.70011 3.49992 2.32011 3.91325 2.08678L5.06659 1.42678C5.81992 0.98011 6.81325 1.24011 7.26658 2.00678L7.34659 2.14011C7.73992 2.82011 8.27992 2.82011 8.67325 2.14011L8.74658 2.01344C9.19992 1.24011 10.1933 0.98011 10.9533 1.43344L12.0999 2.09344C12.5066 2.32678 12.7999 2.70678 12.9266 3.16678C13.0466 3.62678 12.9866 4.10011 12.7533 4.50678C12.5599 4.84678 12.5066 5.15344 12.6199 5.34678C12.7333 5.54011 13.0199 5.65344 13.4133 5.65344C14.3866 5.65344 15.1799 6.44678 15.1799 7.42011V8.59344C15.1799 9.56678 14.3866 10.3601 13.4133 10.3601C13.0199 10.3601 12.7333 10.4734 12.6199 10.6668C12.5066 10.8601 12.5533 11.1668 12.7533 11.5068C12.9866 11.9134 13.0533 12.3934 12.9266 12.8468C12.8066 13.3068 12.5133 13.6868 12.0999 13.9201L10.9466 14.5801C10.6933 14.7201 10.4199 14.7934 10.1399 14.7934ZM7.99992 12.3268C8.59325 12.3268 9.14658 12.7001 9.52658 13.3601L9.59992 13.4868C9.67992 13.6268 9.81325 13.7268 9.97325 13.7668C10.1333 13.8068 10.2933 13.7868 10.4266 13.7068L11.5799 13.0401C11.7533 12.9401 11.8866 12.7734 11.9399 12.5734C11.9933 12.3734 11.9666 12.1668 11.8666 11.9934C11.4866 11.3401 11.4399 10.6668 11.7333 10.1534C12.0266 9.64011 12.6333 9.34678 13.3933 9.34678C13.8199 9.34678 14.1599 9.00678 14.1599 8.58011V7.40678C14.1599 6.98678 13.8199 6.64011 13.3933 6.64011C12.6333 6.64011 12.0266 6.34678 11.7333 5.83344C11.4399 5.32011 11.4866 4.64678 11.8666 3.99344C11.9666 3.82011 11.9933 3.61344 11.9399 3.41344C11.8866 3.21344 11.7599 3.05344 11.5866 2.94678L10.4333 2.28678C10.1466 2.11344 9.76659 2.21344 9.59325 2.50678L9.51992 2.63344C9.13992 3.29344 8.58658 3.66678 7.99325 3.66678C7.39992 3.66678 6.84658 3.29344 6.46658 2.63344L6.39325 2.50011C6.22658 2.22011 5.85325 2.12011 5.56659 2.28678L4.41325 2.95344C4.23992 3.05344 4.10659 3.22011 4.05325 3.42011C3.99992 3.62011 4.02659 3.82678 4.12659 4.00011C4.50659 4.65344 4.55325 5.32678 4.25992 5.84011C3.96658 6.35344 3.35992 6.64678 2.59992 6.64678C2.17325 6.64678 1.83325 6.98678 1.83325 7.41344V8.58678C1.83325 9.00678 2.17325 9.35344 2.59992 9.35344C3.35992 9.35344 3.96658 9.64678 4.25992 10.1601C4.55325 10.6734 4.50659 11.3468 4.12659 12.0001C4.02659 12.1734 3.99992 12.3801 4.05325 12.5801C4.10659 12.7801 4.23325 12.9401 4.40659 13.0468L5.55992 13.7068C5.69992 13.7934 5.86658 13.8134 6.01992 13.7734C6.17992 13.7334 6.31325 13.6268 6.39992 13.4868L6.47325 13.3601C6.85325 12.7068 7.40658 12.3268 7.99992 12.3268Z" fill="#292D32"/>
                                    </svg>
                            </span>
                            Maintenance : {{$build->maintenance}}
                        </p>
                        <p>
                            <span>
                                <img src="{{asset('img/image 42.png')}}" style="width: 20px!important;" alt="">
                            </span>
                            Tower/Phase :  {{$build->tower}}
                        </p>
                        <p>
                            <span><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.85993 8.41492C7.49993 8.41492 7.13327 8.34409 6.8466 8.2095L2.91327 6.35367C1.91327 5.87909 1.7666 5.24159 1.7666 4.8945C1.7666 4.54742 1.91327 3.90992 2.91327 3.43534L6.8466 1.5795C7.4266 1.30325 8.29994 1.30325 8.87994 1.5795L12.8199 3.43534C13.8133 3.90284 13.9666 4.54742 13.9666 4.8945C13.9666 5.24159 13.8199 5.87909 12.8199 6.35367L8.87994 8.2095C8.5866 8.35117 8.2266 8.41492 7.85993 8.41492ZM7.85993 2.43659C7.63327 2.43659 7.41327 2.472 7.25327 2.54992L3.31993 4.40575C2.91327 4.60408 2.7666 4.80242 2.7666 4.8945C2.7666 4.98659 2.91327 5.192 3.31327 5.38325L7.2466 7.23909C7.5666 7.38784 8.1466 7.38784 8.4666 7.23909L12.4066 5.38325C12.8133 5.192 12.9599 4.98659 12.9599 4.8945C12.9599 4.80242 12.8133 4.597 12.4066 4.40575L8.47327 2.54992C8.31327 2.47909 8.0866 2.43659 7.85993 2.43659Z" fill="#292D32"/>
                                <path d="M8 12.1055C7.74667 12.1055 7.49333 12.0488 7.25333 11.9355L2.72667 9.79633C2.04 9.47758 1.5 8.59216 1.5 7.79175C1.5 7.50133 1.72667 7.2605 2 7.2605C2.27333 7.2605 2.5 7.50133 2.5 7.79175C2.5 8.18133 2.8 8.67008 3.13333 8.833L7.66 10.9722C7.87333 11.0713 8.12 11.0713 8.34 10.9722L12.8667 8.833C13.2 8.67716 13.5 8.18133 13.5 7.79175C13.5 7.50133 13.7267 7.2605 14 7.2605C14.2733 7.2605 14.5 7.50133 14.5 7.79175C14.5 8.59216 13.96 9.47758 13.2733 9.80341L8.74667 11.9426C8.50667 12.0488 8.25333 12.1055 8 12.1055Z" fill="#292D32"/>
                                <path d="M8 15.647C7.74667 15.647 7.49333 15.5903 7.25333 15.477L2.72667 13.3378C1.98 12.9837 1.5 12.1974 1.5 11.3262C1.5 11.0358 1.72667 10.7949 2 10.7949C2.27333 10.7949 2.5 11.0428 2.5 11.3333C2.5 11.7795 2.74667 12.1903 3.13333 12.3745L7.66 14.5137C7.87333 14.6128 8.12 14.6128 8.34 14.5137L12.8667 12.3745C13.2533 12.1903 13.5 11.7866 13.5 11.3333C13.5 11.0428 13.7267 10.802 14 10.802C14.2733 10.802 14.5 11.0428 14.5 11.3333C14.5 12.2045 14.02 12.9908 13.2733 13.3449L8.74667 15.4841C8.50667 15.5903 8.25333 15.647 8 15.647Z" fill="#292D32"/>
                                </svg>
                            </span>
                            Type : {{$build->type}}
                        </p>
                        <p>
                            <span> <img src="{{asset('img/image 46.png')}}" style="width: 20px!important;"  alt="">
                            </span>
                            Pet Friendly : {{$build->pet}}
                        </p>
                    </div>
                    <div class="unit" style="display: none">
                        <ul>
                            @foreach($build->units as $unit)
                                <li>
                                    <p>Floor Plan : {{$unit->floor_plan}} </p>
                                    <p>Bedroom : {{$unit->bedroom}}</p>
                                    <p>Bathroom : {{$unit->bathroom}}</p>
                                    <p>Size : {{$unit->size}} Sq/ft</p>
                                    <p>Floors : {{$unit->floors}}</p>
                                    <p>Price:
                                        ${{$unit->price}}
                                    </p>
                                    <p class="line-height-unset">
                                        <button class="more"> more
                                            <img class="vector"
                                                 src="https://cproperty.ca/wp-content/themes/astra-child/svg/Vector.svg"
                                                 alt="">
                                        </button>
                                    </p>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="box-shadow-two p-4 form-section shadow-clear">

                    <h3 class="mb-3 form-title">
                        contact sales center
                    </h3>
                    <form action="">
                        <div>
                            <input type="text" class="form-group-customize outline-none mb-2 p-2"
                                   placeholder="Full Name">
                        </div>
                        <div>
                            <input type="text" class="form-group-customize outline-none mb-2 p-2"
                                   placeholder="Email Address">
                        </div>

                        <div>
                            <input type="text" class="form-group-customize outline-none mb-2 p-2"
                                   placeholder="Phone Number">

                        </div>

                        <div>
                        <textarea class="form-group-customize outline-none textarea-control mb-2 p-2" name="" id=""
                                  placeholder="Message"></textarea>


                        </div>
                        <div>
                            <button class="form-btn-one w-100 p-2">
                                Request Info
                            </button>
                        </div>

                    </form>

                </div>

            </div>


        </div>

    </div>
@endsection

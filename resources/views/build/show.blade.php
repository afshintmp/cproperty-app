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
                    <span>Units</span>
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
                        <img src="{{$build->promotion_image->slug}}" alt="{{$build->promotion_image->alt_text}}">
                        {{$build->promotion_text}}
                    </div>

                    <div class="overview" style="display: none">
                        <p>Lorem Ipsum is simply dummy text of the</p>
                        <p>printing and typesetting industry. Lorem Ipsum</p>
                        <p>has been the industry's standard dummy text ever since the 1500s,</p>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                        <p>and typesetting industry. </p>
                    </div>
                    <div class="unit" style="display: none">
                        <ul>
                            <li>
                                <p>Floor Plan : A2 </p>
                                <p>Bedroom : 3</p>
                                <p>Bathroom : 1</p>
                                <p>Size : 250 Sq/ft</p>
                                <p>Floors : 10</p>
                                <p>Price:
                                    $600,000
                                </p>
                                <p class="line-height-unset">
                                    <button class="more"> more
                                        <img class="vector"
                                             src="https://cproperty.ca/wp-content/themes/astra-child/svg/Vector.svg"
                                             alt="">
                                    </button>
                                </p>
                            </li>
                            <li>
                                <p>Floor Plan : A2 </p>
                                <p>Bedroom : 3</p>
                                <p>Bathroom : 1</p>
                                <p>Size : 250 Sq/ft</p>
                                <p>Floors : 10</p>
                                <p>Price:
                                    $600,000
                                </p>
                                <p class="line-height-unset">
                                    <button class="more"> more
                                        <img class="vector"
                                             src="https://cproperty.ca/wp-content/themes/astra-child/svg/Vector.svg"
                                             alt="">
                                    </button>
                                </p>
                            </li>
                            <li>
                                <p>Floor Plan : A2 </p>
                                <p>Bedroom : 3</p>
                                <p>Bathroom : 1</p>
                                <p>Size : 250 Sq/ft</p>
                                <p>Floors : 10</p>
                                <p>Price:
                                    $600,000
                                </p>
                                <p class="line-height-unset">
                                    <button class="more"> more
                                        <img class="vector"
                                             src="https://cproperty.ca/wp-content/themes/astra-child/svg/Vector.svg"
                                             alt="">
                                    </button>
                                </p>
                            </li>
                            <li>
                                <p>Floor Plan : A2 </p>
                                <p>Bedroom : 3</p>
                                <p>Bathroom : 1</p>
                                <p>Size : 250 Sq/ft</p>
                                <p>Floors : 10</p>
                                <p>Price:
                                    $600,000
                                </p>
                                <p class="line-height-unset">
                                    <button class="more"> more
                                        <img class="vector"
                                             src="https://cproperty.ca/wp-content/themes/astra-child/svg/Vector.svg"
                                             alt="">
                                    </button>
                                </p>
                            </li>
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

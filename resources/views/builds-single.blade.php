@extends('layouts.app')
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
                                <img src="assets/img/as.png"/>

                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/as.png"/>

                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/as.png"/>

                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/as.png"/>

                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/as.png"/>

                            </div>
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
                <h1 class="b-title fs-3 mb-2">Test Building</h1>
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
                        <img src="https://cproperty.ca/wp-content/themes/astra-child/svg/location.svg" alt="">


                        Location : <span>NY</span>
                    </div>
                    <div class="fw-bold color-4a">

                        <img class=""
                             src="https://cproperty.ca/wp-content/themes/astra-child/svg/calendar(1).svg" alt="">

                        Completion Date : <span>May 04,2023</span>
                    </div>
                </div>

                <div class="color-97">


                    <p class="mb-0">INNOVA is a new condo and townhouse development <span class="dba-list"><span
                                class="dba-listing"><span class="lower-text">by</span> <a class="developer-name"
                                                                                          href="https://www.livabl.com/builder/cascadia-green-development">Cascadia Green Development</a> </span></span>currently
                        under construction at 402 East 3rd Street, <a
                            href="https://www.livabl.com/north-vancouver-bc/new-homes">North Vancouver</a>. The
                        development is scheduled for completion in 2025. INNOVA has a total of 168 units.</p>


                </div>


                <div class="container-fluid">
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/img/as.png"/>

                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/as.png"/>

                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/as.png"/>

                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/as.png"/>

                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/as.png"/>

                            </div>
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
				<span class="active">
					<span class="for-vertical">
						<img src="https://cproperty.ca/wp-content/themes/astra-child/svg/image 9.svg" alt="">
					</span>
					Promotion</span>
                    <span>Overview</span>
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
                <div class="box-shadow-one p-3 shadow-clear img-fix color-97">

                    <div class="promotion" style="display: none">

                        <p><img class="alignnone  wp-image-468"
                                src="https://cproperty.ca/wp-content/uploads/2023/04/Rectangle-9743-300x94.png" alt=""
                                width="827" height="259"/></p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of
                            the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever
                            since the 1500s,Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy
                            text
                            of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem
                            Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing
                            and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy
                            text of
                            the printing</p></div>

                    <div class="promotion" style="display: none">
                        <p>Lorem Ipsum is simply dummy text of the</p>
                        <p>printing and typesetting industry. Lorem Ipsum</p>
                        <p>has been the industry's standard dummy text ever since the 1500s,</p>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                        <p>and typesetting industry. </p></div>
                    <div class="unit">
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

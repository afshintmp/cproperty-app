@extends('app')
@section('content')
    @parent

    <div class="">
        <div class="">
            <img class="w-100 category-baner" src="{{asset('img/Rectangle 1.png')}}" height="498" width="1440"/>
        </div>
        <div class="container-fluid c-mt-categ">
            <div class="row">

                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="col-12 mb-3 d-md-none">

                            <div class="bg-white c-cart-shadow p-3">
                                <div class="mob-filter-title" onclick="mobFilterColapse()">
                                    <h3 class="text-4a d-inline-block mb-0">
                                        filter
                                    </h3>
                                    <span class="d-inline-block float-end">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
<path
    d="M11.9995 16.8C11.2995 16.8 10.5995 16.53 10.0695 16L3.54953 9.48001C3.25953 9.19001 3.25953 8.71001 3.54953 8.42001C3.83953 8.13001 4.31953 8.13001 4.60953 8.42001L11.1295 14.94C11.6095 15.42 12.3895 15.42 12.8695 14.94L19.3895 8.42001C19.6795 8.13001 20.1595 8.13001 20.4495 8.42001C20.7395 8.71001 20.7395 9.19001 20.4495 9.48001L13.9295 16C13.3995 16.53 12.6995 16.8 11.9995 16.8Z"
    fill="#292D32"/>
</svg>

                        </span>
                                </div>
                                <div class="mob-filter-body" style="display: none">
                                    <div class="cat-section">
                                        <p class="cat-title">
                                            <img class="cat-vector" src="{{asset('img/CategoryVector.svg')}}" alt="">
                                            Location
                                        </p>
                                        <ul>

                                            <li>
                                                <label class="custom-check-box">Langley
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="custom-check-box">Vancouver
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>


                                        </ul>

                                    </div>

                                    <div class="cat-section close-cat-sec">
                                        <p class="cat-title">
                                            <img class="cat-vector" src="assets/img/CategoryVector.svg" alt="">
                                            Location
                                        </p>
                                        <ul>

                                            <li>
                                                <label class="custom-check-box">Langley
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="custom-check-box">Vancouver
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>


                                        </ul>

                                    </div>

                                    <div class="cat-section">
                                        <p class="cat-title">
                                            <img class="cat-vector" src="assets/img/CategoryVector.svg" alt="">
                                            Location
                                        </p>
                                        <ul>

                                            <li>
                                                <label class="custom-check-box">Langley
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="custom-check-box">Vancouver
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>


                                        </ul>

                                    </div>


                                </div>
                            </div>

                        </div>
                        @foreach($builds as $build)
                            <div class="col-12 col-md-4">
                                <div class="c-cart-shadow mb-4">
                                    <a class="cart-info--link" href="{{route('builds.show' , $build->id)}}">
                                        <div>
                                            <img class="w-100" src="{{$build->cover_image_url}}"/>
                                        </div>

                                        <div class="ps-2 pe-2 pt-2">
                                            <h2 class="c-card-title">
                                                <img src="{{asset('img/Vectorloc.svg')}}" height="20" alt="">
                                                {{$build->name}}
                                            </h2>
                                            <p class="cart-info-- mb-0 color-97">
                                                {{$build->description}}
                                            </p>

                                        </div>
                                        <div class="ps-2 pe-2 mt-8">
                                            @if($build->min_price)
                                                <p class=" c-cart-price-from color-green d-inline-block  pb-11">
                                                    ${{$build->min_price}}
                                                </p>

                                            @endif
                                            @if($build->max_price)
                                                <span class="c-cart-price-dash">
                                    -
                                </span>
                                                <p class=" c-cart-price-to color-green d-inline-block  pb-11">


                                                    ${{number_format($build->max_price)}}
                                                </p>
                                            @endif
                                            <div class="clear-fix"></div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <div class="page-in text-center">
             <span class="page-in-vector page-in-before vector-page-deactive">
                <a href="">
                    <img src="assets/img/vettorrightactive.svg" alt="">
                </a>
            </span>

                        <span class="page-active">
              <a href="">
                  1
                  </a>
            </span>
                        <span>
              <a href="">
                  2
                  </a>
            </span>
                        <span>
              <a href="">
                  3
                  </a>
            </span>
                        <span class="page-in-vector page-in-after">
                <a href="">
                    <img src="assets/img/vettorrightactive.svg" alt="">
                </a>
            </span>
                    </div>
                </div>
                <div class="col-3 d-none d-md-block">
                    <div class="c-cart-shadow p-4 cat-main">

                        <div class="cat-section">
                            <p class="cat-title">
                                <img class="cat-vector" src="assets/img/CategoryVector.svg" alt="">
                                Location
                            </p>
                            <ul>
                                <li>
                                    <label class="custom-check-box">Langley
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-check-box">Vancouver
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div class="cat-section">
                            <p class="cat-title">
                                <img class="cat-vector closed-cat-list-icon" src="assets/img/CategoryVector.svg" alt="">
                                Location
                            </p>
                            <ul class="">
                                <li>
                                    <label class="custom-check-box">Langley
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-check-box">Vancouver
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>


                            </ul>

                        </div>

                        <div class="cat-section">
                            <p class="cat-title">
                                <img class="cat-vector" src="assets/img/CategoryVector.svg" alt="">
                                Location
                            </p>
                            <ul>

                                <li>
                                    <label class="custom-check-box">Langley
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-check-box">Vancouver
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>


                            </ul>

                        </div>


                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection

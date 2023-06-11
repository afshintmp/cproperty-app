<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font/font-face.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mob-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/online.css') }}">

    @section('custom-head')

    @show

</head>
<body>
@include('partials.navMenu')


@section('content')

@show

<footer>
    <div class="back-17 mt-4">
        <div class="container">
            <div class="footer-menu d-flex justify-content-between">
                <div>
                    <img src="http://127.0.0.1:8000/img/Logo 2.png" alt="">
                </div>
                <div class="d-none d-md-block">
                    <div>
                        <ul class="in-footer menu-list">
                            <li class="menu-active">
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Cities</a>
                            </li>
                            <li>
                                <a href="#">Articles</a>

                            </li>
                            <li>
                                <a href="#">Professionals</a>

                            </li>

                        </ul>


                    </div>
                </div>
                <div>
                    <ul class="footer-social-ul">
                        <li>
                            <a href=""><img src="http://127.0.0.1:8000/img/Facebook Icon.svg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="http://127.0.0.1:8000/img/Linkedin Icon.svg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="http://127.0.0.1:8000/img/Twitter Icon.svg" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @section('custom-script')
    @show


</footer>
</body>
</html>

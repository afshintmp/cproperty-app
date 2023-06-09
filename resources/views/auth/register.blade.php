<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/online.css') }}">


</head>
<body class="login-page">

@include('partials.navMenu')

<div class="main-sec">
    <div class="login-cover"
         style="background-size: cover;background-image: url('{{asset('img/Frame 345.png')}}') ;background-repeat: no-repeat"></div>
    <div class="container h-100 pt-5 pb-5">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-6 align-self-center">

                <div class="login-box position-relative">

                    <div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="login-form-input-group">

                                <x-input-label for="name" :value="__('Name')"/>
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                              :value="old('name')" required
                                              autofocus autocomplete="name"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                            </div>

                            <!-- Email Address -->
                            <div class="login-form-input-group">
                                <x-input-label for="email" :value="__('Email')"/>
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                              :value="old('email')"
                                              required
                                              autocomplete="username"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                            </div>

                            <!-- Password -->
                            <div class="login-form-input-group">
                                <x-input-label for="password" :value="__('Password')"/>

                                <x-text-input id="password" class="block mt-1 w-full"
                                              type="password"
                                              name="password"
                                              required autocomplete="new-password"/>

                                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                            </div>

                            <!-- Confirm Password -->
                            <div class="login-form-input-group">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                              type="password"
                                              name="password_confirmation" required autocomplete="new-password"/>

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                            </div>

                            <div class="text-center mt-4">


                                <x-primary-button class="btn-green ml-4">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                            <div class="text-center">
                                <a class="alearly-acount"
                                   href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>


<footer class="login-footer">
    <div class="back-17 mt-4">
        <div class="container">
            <div class="footer-menu d-flex justify-content-between">
                <div>
                    <img src="assets/img/Logo 2.png" alt="">
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
                            <a href=""><img src="assets/img/Facebook Icon.svg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="assets/img/Linkedin Icon.svg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="assets/img/Twitter Icon.svg" alt=""></a>
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
</footer>
</body>
</html>


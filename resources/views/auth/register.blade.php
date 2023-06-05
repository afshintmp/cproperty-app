<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">


</head>
<body class="login-page">

<div id="main-menu">
    <div class="container">

        <div class="menu-wrapper d-flex justify-content-between">
            <div>
                <div class="logo">
                    <img src="{{asset('img/Logo 1.png')}}" height="31" width="159"/>
                </div>
            </div>
            <div class="d-none d-md-block">
                <div>
                    <ul class="in-top menu-list">
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
            <div class="float-end d-none d-md-block">
                <div>
                    <button class="c-btn-one h-40 img-control">

                        <img src="assets/img/search-normal.png"/></button>
                    <button class="c-btn-one">
                        login/sign in
                    </button>
                </div>
            </div>

            <span class="bar-menu d-md-none" onclick="collapseMenu()">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.125 10.0104H3.875C3.34542 10.0104 2.90625 9.57125 2.90625 9.04167C2.90625 8.51208 3.34542 8.07292 3.875 8.07292H27.125C27.6546 8.07292 28.0938 8.51208 28.0938 9.04167C28.0938 9.57125 27.6546 10.0104 27.125 10.0104Z"
                            fill="white"/>
                        <path
                            d="M27.125 16.4688H3.875C3.34542 16.4688 2.90625 16.0296 2.90625 15.5C2.90625 14.9704 3.34542 14.5312 3.875 14.5312H27.125C27.6546 14.5312 28.0938 14.9704 28.0938 15.5C28.0938 16.0296 27.6546 16.4688 27.125 16.4688Z"
                            fill="white"/>
                        <path
                            d="M27.125 22.9271H3.875C3.34542 22.9271 2.90625 22.4879 2.90625 21.9583C2.90625 21.4288 3.34542 20.9896 3.875 20.9896H27.125C27.6546 20.9896 28.0938 21.4288 28.0938 21.9583C28.0938 22.4879 27.6546 22.9271 27.125 22.9271Z"
                            fill="white"/>
                        </svg>

            </span>


        </div>
    </div>
</div>

<div class="mob-menu" style="display: none">

    <div class="position-relative h-100">
        <div class="mob-menu-close" onclick="closeMenu()">
            <svg width="44" height="44" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.7489 12.1037L6.15203 16.7006L4.91531 15.4639L9.51221 10.867L4.91531 6.27008L6.1287 5.05668L10.7256 9.65358L15.3225 5.05668L16.5592 6.29341L11.9623 10.8903L16.5592 15.4872L15.3458 16.7006L10.7489 12.1037Z"
                    fill="#4A5568"/>
            </svg>

        </div>
        <ul class="mob-menu-ul">
            <li class="menu-active"><a href="">home</a></li>
            <li><a href="">Cities </a></li>
            <li><a href="">Professionals</a></li>
            <li><a href="">Articles</a></li>
        </ul>

    </div>
</div>

<div class="main-sec"
     style="background-size: cover;background-image: url('{{asset('img/Frame 345.png')}}') ;background-repeat: no-repeat">

    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-6 align-self-center">

                <div class="login-box">

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

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                   href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-primary-button class="ml-4">
                                    {{ __('Register') }}
                                </x-primary-button>
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


@if(1 == 0)

    <x-guest-layout>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                heloo
                <x-input-label for="name" :value="__('Name')"/>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                              autofocus autocomplete="name"/>
                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')"/>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                              required
                              autocomplete="username"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')"/>

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="new-password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation" required autocomplete="new-password"/>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                   href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
@endif

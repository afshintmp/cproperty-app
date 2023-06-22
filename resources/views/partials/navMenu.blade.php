<div id="nav-menu">
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-auto ">
                <div class="logo align-items-center">
                    <img src="{{ asset('img/Logo 1.png') }}" height="31" width="159"/>
                </div>
            </div>
            <div class="d-none d-md-block col">
                <div>
                    <ul class="in-top menu-list">
                        <li class="menu-active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="{{route('plan.index')}}">Plans</a>
                        </li>
                        <li>
                            <a href="{{route('builds.index')}}">Builds</a>
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
            <div class="float-end d-none d-md-block col-auto ">
                <div class="">
                    <button class="c-btn-one h-40 img-control search-padding">

                        <img src="{{asset('img/search-normal.svg')}}"/></button>
                    @if(auth()->user())
                        <button class="c-btn-one menu-btn-padding">
                            {{auth()->user()->dashboardLink()}}
                        </button>

                    @else
                        <button class="c-btn-one menu-btn-padding">
                            login/sign in
                        </button>
                    @endif
                </div>
            </div>
            <span class="bar-menu d-md-none col text-end" onclick="collapseMenu()">
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


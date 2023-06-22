@extends('app')
@section('content')
    <x-realtor.realtor-bar active="profile"></x-realtor.realtor-bar>



    <div class="container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="brardcurmbs">
                    <p>
                        Dashboard
                    </p>
                    <span>
                >
            </span>
                    <p>
                        Profile
                    </p>
                    <span>
                >
            </span>
                    <p>
                        view Profile
                    </p>
                </div>
                <div class="admin-sec ">
                    <h3 class="admin-sec-title">
                        Realtor Profile
                    </h3>

                    <div class="list-view-profile-cart">

                        <div>
                            <div class="cart">
                                <img src="{{asset('img/as.png')}}" alt="">
                            </div>
                            <div>
                                <h3>company’s name</h3>
                                <div>
                                    <span>
                                        <span class="list-view-profile-cart-icon">
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.50005 8.85624C6.1688 8.85624 5.0813 7.77499 5.0813 6.43749C5.0813 5.09999 6.1688 4.02499 7.50005 4.02499C8.8313 4.02499 9.9188 5.10624 9.9188 6.44374C9.9188 7.78124 8.8313 8.85624 7.50005 8.85624ZM7.50005 4.96249C6.68755 4.96249 6.0188 5.62499 6.0188 6.44374C6.0188 7.26249 6.6813 7.92499 7.50005 7.92499C8.3188 7.92499 8.9813 7.26249 8.9813 6.44374C8.9813 5.62499 8.31255 4.96249 7.50005 4.96249Z" fill="#4A5568"/>
                                            <path d="M7.50005 14.225C6.57505 14.225 5.6438 13.875 4.9188 13.1812C3.07505 11.4062 1.03755 8.575 1.8063 5.20625C2.50005 2.15 5.1688 0.78125 7.50005 0.78125C7.50005 0.78125 7.50005 0.78125 7.5063 0.78125C9.83755 0.78125 12.5063 2.15 13.2 5.2125C13.9625 8.58125 11.925 11.4062 10.0813 13.1812C9.3563 13.875 8.42505 14.225 7.50005 14.225ZM7.50005 1.71875C5.6813 1.71875 3.3438 2.6875 2.72505 5.4125C2.05005 8.35625 3.90005 10.8937 5.57505 12.5C6.6563 13.5437 8.35005 13.5437 9.4313 12.5C11.1 10.8937 12.95 8.35625 12.2875 5.4125C11.6625 2.6875 9.3188 1.71875 7.50005 1.71875Z" fill="#4A5568"/>
                                            </svg>

                                        </span>
                                        <p>
                                            137 Market St Singapore 048943
                                        </p>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>

@endsection

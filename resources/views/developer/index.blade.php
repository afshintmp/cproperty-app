@extends('app')
@section('content')
    <div class="admin-nav-bar">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="profile-tab-list">
                        <div class="active">Profile</div>
                        <div>
                            Developer
                            <div class="admin-nav-bar-list-wrapper">
                                <ul class="admin-nav-bar-list">
                                    <li>
                                        <a href="{{route('developer.project.add')}}">
                                    <span>
                                        <img src="{{asset('img/image%2042(2).svg')}}" alt="">
                                    </span>
                                            add project
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                    <span>
                                          <img src="{{asset('img/eye-open.svg')}}" alt="">
                                    </span>
                                            view projects
                                        </a>
                                    </li>
                                </ul>
                                <div class="clear-fix"></div>
                            </div>
                        </div>
                        <div>Setting</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                        Edit Profile
                    </p>
                </div>

                <div class="admin-sec ">
                    <h3 class="admin-sec-title">
                        General Information
                    </h3>

                    <div>

                        <div class="d-block d-md-inline-block text-center">
                            <div class="uploader">
                                <img src="{{asset('img/Frame%2080.svg')}}" alt="">
                            </div>
                        </div>
                        <div class="d-block d-md-inline-block ms-31 vertical-middle">
                            <div class="profile-input-custom">
                                <label for="">Username:</label>
                                <div class="input-custom w-420">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">Fullname:</label>
                                <div class="input-custom w-420">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label class="w-unset" for="">Display name publicly as:</label>

                                <select class="c-select">
                                    <option>
                                        UserName
                                    </option>
                                </select>


                            </div>

                        </div>

                        <div class="text-center">
                            <button class="green-btn float-md-end p-30-17 mt-25 mb-50 m-b-mob-25">add changes</button>
                            <div class="clear-fix"></div>
                        </div>
                    </div>


                </div>
                <div class="admin-sec ">
                    <h3 class="admin-sec-title">
                        Contact Info
                    </h3>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="profile-input-custom">
                                <label for="">Email:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">Phone:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">Website:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">Facebook:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">Instagram:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>

                        </div>
                        <div class="col-12 col-md-6">
                            <div class="profile-input-custom">
                                <label for="">Pinterest::</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">linkedln:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">Twitter:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">Youtube:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                        </div>


                        <div class="text-center">
                            <button class="green-btn float-md-end p-30-17 mt-25 mb-50 m-b-mob-25">add changes</button>
                            <div class="clear-fix"></div>
                        </div>
                    </div>


                </div>
                <div class="admin-sec ">
                    <h3 class="admin-sec-title">
                        Billing Information
                    </h3>

                    <div class="row">
                        <div class="col-md-6 col-12" >
                            <div class="profile-input-custom">
                                <label for="">First name:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">Lastname:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">Company:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">Address line:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">Phone:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>

                        </div>
                        <div class="col-md-6 col-12 label-width-large">
                            <div class="profile-input-custom">
                                <label for="">Postcode/Zip:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">Country/Region:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">City:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">State/Country:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="profile-input-custom">
                                <label for="">Email:</label>
                                <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                              stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                    <input type="text">
                                </div>

                            </div>
                        </div>


                        <div class="text-center">
                            <button class="green-btn float-md-end p-30-17 mt-25 mb-50 m-b-mob-25">add changes</button>
                            <div class="clear-fix"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>


@endsection

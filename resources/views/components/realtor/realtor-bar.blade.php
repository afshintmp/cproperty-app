<div class="admin-nav-bar">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="profile-tab-list">
                    <div {{$active == 'profile'? 'class=active' : '' }} >Profile
                        <div class="admin-nav-bar-list-wrapper">
                            <ul class="admin-nav-bar-list">
                                <li>
                                    <a href="{{route('realtor.contactInfo.view')}}">
                                    <span>
                                        <img src="{{asset('img/image%2042(2).svg')}}" alt="">
                                    </span>
                                        view profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('developer.project.list')}}">
                                    <span>
                                          <img src="{{asset('img/eye-open.svg')}}" alt="">
                                    </span>
                                        edit profile
                                    </a>
                                </li>
                            </ul>
                            <div class="clear-fix"></div>
                        </div>
                    </div>
                    <div {{$active == 'developer'? 'class=active' : '' }} >
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
                                    <a href="{{route('developer.project.list')}}">
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

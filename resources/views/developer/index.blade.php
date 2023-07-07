@extends('app')
@section('content')
    <x-developer.developer-bar active="profile"></x-developer.developer-bar>



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
                @if(session('success'))

                    <div class="alert alert-success mt-2">
                        {{session('success')}}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger mt-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="admin-sec ">
                    <h3 class="admin-sec-title">
                        General Information
                    </h3>
                    <form action="{{route('realtor.GeneralInfo.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div>

                            <div class="d-block d-md-inline-block text-center" style="width: 219px">

                                <div>
                                    <input type="file" name="cover" id="select-image">
                                    <div class="image-preview mt-3">
                                        <img class="w-100" src="{{asset('storage/' .$info?->image)}}" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="d-block d-md-inline-block ms-31 vertical-top">
                                <div class="profile-input-custom readonly">
                                    <label for="">Username:</label>
                                    <div class="input-custom w-420">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                            stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                            stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                        <input type="text" readonly value="{{$user?->name}}">
                                    </div>

                                </div>
                                <div class="profile-input-custom">
                                    <label for="">Fullname:
                                        <span class="label-required">* required</span>
                                    </label>

                                    <div class="input-custom w-420">
                                            <span>
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                                        stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                                        stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>

                                            </span>
                                        <input type="text" placeholder="type down your fullname" name="fullName"
                                               value="{{$info?->full_name}}">
                                    </div>


                                </div>
                                <div class="profile-input-custom text-area-co-gn">
                                    <label for="">Bio:
                                        <span class="label-required">* required</span>
                                    </label>


                                    <textarea class="input-custom w-420" name="bio">{{$info?->bio}}</textarea>


                                </div>
                                <div class="profile-input-custom">
                                    <label class="w-unset" for="">Display name publicly as:</label>

                                    <select class="c-select" name="displayName">
                                        <option value="user-name"
                                                @if($info?->display_name == 'user-name') selected @endif >
                                            UserName
                                        </option>
                                        <option value="full-name"
                                                @if($info?->display_name == 'full-name') selected @endif>
                                            Full Name
                                        </option>
                                    </select>


                                </div>

                            </div>

                            <div class="text-center">

                                <input type="hidden" name="email" value="{{$user?->email}}">
                                <button class="green-btn float-md-end p-30-17 mt-25 mb-50 m-b-mob-25">add changes
                                </button>
                                <div class="clear-fix"></div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="admin-sec ">
                    <h3 class="admin-sec-title">
                        Contact Info
                    </h3>
                    <form action="{{route('realtor.contactInfo.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div>
                                    <div>
                                        <x-CustomForms.ReadonlyInput inputLabel="email"
                                                                     svg=' <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.05806 1.30806C1.17116 1.19496 1.32741 1.125 1.5 1.125H11.5C11.6726 1.125 11.8288 1.19496 11.9419 1.30806M1.05806 1.30806C0.944956 1.42116 0.875 1.57741 0.875 1.75V9.25C0.875 9.59518 1.15482 9.875 1.5 9.875H11.5C11.8452 9.875 12.125 9.59518 12.125 9.25V1.75C12.125 1.57741 12.055 1.42116 11.9419 1.30806M1.05806 1.30806L5.61612 5.86609C6.10427 6.35424 6.89573 6.35424 7.38388 5.86609L11.9419 1.30806"
                                        stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>'
                                                                     type="text" name="email"
                                                                     valueTxt="{{$user?->email}}"
                                                                     placeholderTxt="type down your facebook account">
                                        </x-CustomForms.ReadonlyInput>
                                    </div>
                                </div>

                                <div class="profile-input-custom ">
                                    <label for="">Phone:
                                        <span class="label-required">* required</span>
                                    </label>
                                    <div class="input-custom vertical-top">
                                <span>
                               <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.1246 11.9915V10.2979C13.1315 10.0211 13.0362 9.75132 12.8568 9.54003C12.3509 8.94415 10.6159 8.56298 9.92818 8.70937C9.39206 8.82348 9.01699 9.36177 8.6503 9.72774C7.23415 8.92409 6.06161 7.75387 5.25637 6.34053C5.62306 5.97456 6.16242 5.60023 6.27676 5.06517C6.42321 4.37986 6.04258 2.65593 5.45082 2.14803C5.24268 1.96938 4.97655 1.87236 4.70203 1.87505H3.00507C2.35849 1.87566 1.82055 2.45559 1.87942 3.10574C1.875 8.70937 6.25 13.125 11.8915 13.1206C12.5451 13.1795 13.1273 12.6389 13.1246 11.9915Z"
                                        stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    </svg>


                                </span>
                                        <input type="text" placeholder="type down your phone number" name="phone"
                                               value="{{$info?->phone}}">
                                    </div>

                                </div>
                                <div>
                                    <x-CustomForms.inputCustom inputLabel="website"
                                                               svg='<svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                d="M13.125 7.5C13.125 10.6066 10.6066 13.125 7.5 13.125M13.125 7.5C13.125 4.3934 10.6066 1.875 7.5 1.875M13.125 7.5H1.875M7.5 13.125C4.3934 13.125 1.875 10.6066 1.875 7.5M7.5 13.125C7.5 13.125 10 11.25 10 7.5C10 3.75 7.5 1.875 7.5 1.875M7.5 13.125C7.5 13.125 5 11.25 5 7.5C5 3.75 7.5 1.875 7.5 1.875M1.875 7.5C1.875 4.3934 4.3934 1.875 7.5 1.875"
                                                                stroke="#4A5568" stroke-width="1.5"/>
                                                                </svg>'
                                                               type="text" name="website" value="{{$info?->website}}"
                                                               placeholderTxt="type down your website">
                                    </x-CustomForms.inputCustom>
                                </div>
                                <div>
                                    <x-CustomForms.inputCustom inputLabel="facebook"
                                                               svg='<svg width="9" height="15" viewBox="0 0 9 15" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.28106 8.72042V15H2.39645V8.72042H0V6.17419H2.39645V5.24778C2.39645 1.80843 3.83321 0 6.87315 0C7.8051 0 8.03809 0.149778 8.54845 0.27182V2.79031C7.97707 2.69046 7.8162 2.63499 7.22263 2.63499C6.51812 2.63499 6.1409 2.83469 5.79697 3.22855C5.45303 3.62241 5.28106 4.30473 5.28106 5.28106V6.17973H8.54845L7.67197 8.72596H5.28106V8.72042Z"
                                                                        fill="#4A5568"/>
                                                                 </svg>'
                                                               type="text" name="facebook" value="{{$info?->facebook}}"
                                                               placeholderTxt="type down your facebook account">
                                    </x-CustomForms.inputCustom>
                                </div>
                                <div>
                                    <x-CustomForms.inputCustom inputLabel="instagram"
                                                               svg='<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.4928 15H2.50719C1.12731 15 0 13.8727 0 12.4928V2.50719C0 1.12731 1.12731 0 2.50719 0H12.4928C13.8727 0 15 1.12731 15 2.50719V12.4928C15 13.8789 13.8788 15 12.4928 15Z" fill="#4A5568"/>
                                                            <path d="M7.50293 11.3532C6.47419 11.3532 5.50704 10.9527 4.78014 10.2258C4.05324 9.49895 3.65283 8.5318 3.65283 7.50306C3.65283 6.47431 4.05324 5.50716 4.78014 4.78026C5.50704 4.05336 6.47419 3.65295 7.50293 3.65295C8.53168 3.65295 9.49883 4.05336 10.2257 4.78026C10.9526 5.50716 11.353 6.47431 11.353 7.50306C11.353 8.5318 10.9526 9.49895 10.2257 10.2258C9.49267 10.9527 8.53168 11.3532 7.50293 11.3532ZM7.50293 4.47226C5.83353 4.47226 4.47213 5.82749 4.47213 7.50306C4.47213 9.17246 5.82737 10.5339 7.50293 10.5339C9.17234 10.5339 10.5337 9.17862 10.5337 7.50306C10.5276 5.83365 9.17234 4.47226 7.50293 4.47226Z" fill="white"/>
                                                            <path d="M12.1035 3.52645C12.5118 3.52645 12.8427 3.19548 12.8427 2.78721C12.8427 2.37894 12.5118 2.04797 12.1035 2.04797C11.6952 2.04797 11.3643 2.37894 11.3643 2.78721C11.3643 3.19548 11.6952 3.52645 12.1035 3.52645Z" fill="white"/>
                                                            </svg>'
                                                               type="text" name="instagram"
                                                               value="{{$info?->instagram}}"
                                                               placeholderTxt="type down your instagram account">
                                    </x-CustomForms.inputCustom>
                                </div>


                            </div>
                            <div class="col-12 col-md-6">
                                <div>
                                    <x-CustomForms.inputCustom inputLabel="pinterest"
                                                               svg='<svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.89268 10.2515C5.36753 10.2668 5.79642 10.8949 7.05247 10.8949C9.41139 10.9102 11.0351 9.10271 11.5405 6.72847C13.3021 -1.4971 1.30836 -2.15576 0.082945 4.61464C-0.20809 6.20767 0.266757 8.04579 1.50749 8.64318C2.45718 9.10271 2.51845 7.78539 2.22741 7.21864C0.940733 4.70655 2.48781 2.43953 4.50974 1.79619C6.40913 1.18349 7.75708 1.68897 8.78336 2.74589C10.1007 4.10916 9.50329 7.81603 7.94089 8.99548C7.38946 9.40906 6.3785 9.50097 5.8577 9.0108C4.78546 8.01516 6.43977 5.90132 6.19468 4.35424C5.9496 2.82248 3.52941 3.05224 3.40687 5.30393C3.3456 6.45276 3.68259 6.78974 3.42219 7.93857C3.00861 9.77668 1.75257 13.5295 2.64099 15C3.94299 14.3873 4.58633 10.7111 4.89268 10.2515Z" fill="#4A5568"/>
</svg>
'
                                                               type="text" name="pinterest"
                                                               value="{{$info?->pinterest}}"
                                                               placeholderTxt="type down your pinterest account">
                                    </x-CustomForms.inputCustom>
                                </div>
                                <div>
                                    <x-CustomForms.inputCustom inputLabel="linkedln"
                                                               svg='<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M3.38726 4.93262H0.25293V14.9278H3.38726V4.93262Z" fill="#4A5568"/>
                                                                <path d="M11.8657 4.71594C11.7502 4.70149 11.6274 4.69427 11.5046 4.68705C9.74969 4.61483 8.76028 5.65479 8.41363 6.10255C8.31974 6.22533 8.27641 6.29755 8.27641 6.29755V4.96148H5.2793V14.9567H8.27641H8.41363C8.41363 13.9384 8.41363 12.9273 8.41363 11.909C8.41363 11.3601 8.41363 10.8113 8.41363 10.2624C8.41363 9.58354 8.36308 8.86134 8.70251 8.24025C8.99139 7.72027 9.51136 7.46028 10.0963 7.46028C11.8296 7.46028 11.8657 9.02745 11.8657 9.17189C11.8657 9.17911 11.8657 9.18633 11.8657 9.18633V15H15.0001V8.47858C15.0001 6.24699 13.8662 4.9326 11.8657 4.71594Z" fill="#4A5568"/>
                                                                <path d="M1.81993 3.63987C2.82505 3.63987 3.63987 2.82506 3.63987 1.81993C3.63987 0.814812 2.82505 0 1.81993 0C0.814809 0 0 0.814812 0 1.81993C0 2.82506 0.814809 3.63987 1.81993 3.63987Z" fill="#4A5568"/>
                                                                </svg>'
                                                               type="text" name="linkedln" value="{{$info?->linkedln}}"
                                                               placeholderTxt="type down your linkedln account">
                                    </x-CustomForms.inputCustom>
                                </div>
                                <div>
                                    <x-CustomForms.inputCustom inputLabel="twitter"
                                                               svg='<svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 12.8501C1.85023 12.9542 3.46819 12.5217 5.04609 11.3763C3.45217 11.104 2.34684 10.3751 1.74611 8.86926C2.21067 8.80518 2.61917 8.92533 3.09975 8.73309C1.52985 8.04426 0.512621 7.01102 0.472572 5.22486C0.969172 5.26491 1.34563 5.5933 1.93835 5.54525C0.496605 4.13555 0.0560677 2.59769 0.96116 0.731437C2.46698 2.46153 4.22911 3.63895 6.38371 4.19161C6.50386 4.22365 6.61598 4.25569 6.73613 4.27972C7.28879 4.40787 7.94559 4.6802 8.282 4.64015C8.85869 4.56807 8.282 3.90327 8.42618 3.03822C8.88273 0.346973 11.8463 -0.878506 14.0409 0.699399C14.6817 1.16396 15.1863 1.15595 15.8191 0.875611C16.1475 0.731437 16.4839 0.587263 16.8764 0.41906C16.7883 1.18799 16.1956 1.6125 15.723 2.18119C16.2596 2.30133 16.6921 2.14915 17.1887 1.98896C17.0205 2.54162 16.604 2.854 16.2276 3.15837C15.8351 3.47074 15.6829 3.79914 15.6669 4.31176C15.4266 12.0731 6.60798 18.0724 0.576702 13.2986C-0.00800382 12.834 0.560677 13.2986 0 12.8501Z" fill="#4A5568"/>
                                                                </svg>'
                                                               type="text" name="twitter" value="{{$info?->twitter}}"
                                                               placeholderTxt="type down your twitter account">
                                    </x-CustomForms.inputCustom>
                                </div>
                                <div>
                                    <x-CustomForms.inputCustom inputLabel="youtube" value="{{$info?->youtube}}"
                                                               svg='<svg width="23" height="15" viewBox="0 0 23 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18.6256 15H3.62436C1.61715 15 0 13.2249 0 11.0414V3.95858C0 1.76627 1.62528 0 3.62436 0H18.6256C20.6328 0 22.25 1.77515 22.25 3.95858V11.0414C22.2581 13.2337 20.6328 15 18.6256 15Z" fill="#4A5568"/>
                                                            <path d="M15.0606 7.38905L8.75 3.75V11.0281L15.0606 7.38905Z" fill="white"/>
                                                            </svg>'
                                                               type="text" name="youtube"
                                                               placeholderTxt="type down your youtube account">
                                    </x-CustomForms.inputCustom>
                                </div>
                            </div>

                            <div class="text-center">
                                <button class="green-btn float-md-end p-30-17 mt-25 mb-50 m-b-mob-25">add changes
                                </button>
                                <div class="clear-fix"></div>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="admin-sec ">
                    <h3 class="admin-sec-title">
                        Billing Information
                    </h3>
                    <form action="{{route('realtor.billingInfo.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div>
                                    <x-CustomForms.inputCustom inputLabel="company"
                                                               svg='<svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.875 9.87499H1.625V9.24999C1.625 8.08509 2.42173 7.10628 3.5 6.82875M4.75 4.76831C4.02175 4.51092 3.5 3.81639 3.5 3.00001C3.5 2.18362 4.02175 1.48909 4.75 1.2317M14.125 9.87499H15.375V9.24999C15.375 8.08509 14.5783 7.10628 13.5 6.82875M12.25 1.2317C12.9782 1.48909 13.5 2.18362 13.5 3.00001C13.5 3.81639 12.9782 4.51092 12.25 4.76831M7.25 6.75H9.75C11.1307 6.75 12.25 7.86929 12.25 9.25V9.875H4.75V9.25C4.75 7.86929 5.86929 6.75 7.25 6.75ZM10.375 3C10.375 4.03553 9.53553 4.875 8.5 4.875C7.46447 4.875 6.625 4.03553 6.625 3C6.625 1.96447 7.46447 1.125 8.5 1.125C9.53553 1.125 10.375 1.96447 10.375 3Z" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
'
                                                               type="text" name="company"
                                                               value="{{$info?->company}}"
                                                               placeholderTxt="type down your company’s name">
                                    </x-CustomForms.inputCustom>
                                </div>

                                <div>
                                    <x-CustomForms.inputCustom inputLabel="address line"
                                                               svg='<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.5 2.5L1.875 6.875L6.25 8.75M12.5 2.5L8.125 13.125L6.25 8.75M12.5 2.5L6.25 8.75" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>'
                                                               type="text" name="address"
                                                               value="{{$info?->address}}"
                                                               placeholderTxt="type down your address line">
                                    </x-CustomForms.inputCustom>
                                </div>


                            </div>
                            <div class="col-md-6 col-12 label-width-large">
                                <div>
                                    <x-CustomForms.inputCustom inputLabel="postcode/zip"
                                                               svg='<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.25 8.125H8.75M11.875 5.625V12.5H3.125V5.625M11.875 5.625H3.125M11.875 5.625C12.2202 5.625 12.5 5.34518 12.5 5V3.125C12.5 2.77982 12.2202 2.5 11.875 2.5H3.125C2.77982 2.5 2.5 2.77982 2.5 3.125V5C2.5 5.34518 2.77982 5.625 3.125 5.625" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
'
                                                               type="text" name="postcode"
                                                               value="{{$info?->postcode}}"
                                                               placeholderTxt="type down your address line">
                                    </x-CustomForms.inputCustom>
                                </div>

                                <div class="profile-input-custom">
                                    <label for="">Country/Region:</label>
                                    <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                            stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                            stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                        <input type="text" name="country" value="{{$info?->country}}" placeholder="">
                                    </div>

                                </div>
                                <div class="profile-input-custom">
                                    <label for="">City:</label>
                                    <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                            stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                            stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                        <input type="text" name="city" value="{{$info?->city}}">
                                    </div>

                                </div>
                                <div class="profile-input-custom">
                                    <label for="">State/Country:</label>
                                    <div class="input-custom">
                                <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 9.375H5C3.61929 9.375 2.5 10.4943 2.5 11.875V13.125H12.5V11.875C12.5 10.4943 11.3807 9.375 10 9.375Z"
                                            stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M7.5 6.875C8.88071 6.875 10 5.75571 10 4.375C10 2.99429 8.88071 1.875 7.5 1.875C6.11929 1.875 5 2.99429 5 4.375C5 5.75571 6.11929 6.875 7.5 6.875Z"
                                            stroke="#4A5568" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>

                                </span>
                                        <input type="text" name="state" value="{{$info?->state}}">
                                    </div>

                                </div>

                            </div>


                            <div class="text-center">
                                <input type="hidden" name="email" value="{{$user->email}}">
                                <button class="green-btn float-md-end p-30-17 mt-25 mb-50 m-b-mob-25">add changes
                                </button>
                                <div class="clear-fix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

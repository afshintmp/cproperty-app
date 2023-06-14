@extends('app')
@section('content')
    <div class="admin-nav-bar">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="profile-tab-list">
                        <div>Profile</div>
                        <div class="active">
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


    <div class="bread-sec">
        <div class="container">
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
                </div>
            </div>
        </div>
    </div>

    <div class="container">


        <div class="row">
            <div class="col-12">


                <div class="admin-sec input-w-unset mt-85">
                    <h3 class="admin-sec-title">
                        Add Property
                    </h3>
                    <form action="{{route('developer.project.create')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="have-back-shadow add-developer-padding section-input-bdrs-unset">
                            <h3 class="admin-sec-subtitle admin-sec-title mb-3">
                                Building Information
                            </h3>
                            <div class="d-flex">

                                    <div>
                                        <div class="cover-section">
                                            <label for="select-cover">
                                                <div class="uploader" id="">
                                                    <img src="{{asset('img/share-bigsize.svg')}}" alt="">
                                                    <p class="uploader-text">upload building’s cover</p>
                                                    <p>

                                                    </p>
                                                </div>
                                                <input type="file" name="cover" id="select-cover"
                                                       style="display: none">
                                            </label>


                                            <div class="preview_image">

                                                <div id="cover"></div>
                                            </div>
                                        </div>


                                        <div>

                                            <label for="select-image">
                                                <div class="uploader" id="">
                                                    <img src="{{asset('img/share-bigsize.svg')}}" alt="">
                                                    <p class="uploader-text">upload building’s photo</p>
                                                    <p>

                                                    </p>
                                                </div>
                                                <input type="file" name="file[]" id="select-image" multiple
                                                       style="display: none">
                                            </label>


                                            <div class="preview_image">

                                                <p>
                                                    <img src="{{asset('img/share-2.svg')}}" alt="">
                                                    <span id="total-images">0</span> File(s) Selected</p>


                                                <div id="images"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        const coverInput = document.getElementById('select-cover');
                                        const cover = document.getElementById('cover');
                                        console.log(coverInput)

                                        // Listen to the change event on the <input> element
                                        coverInput.addEventListener('change', (event) => {
                                            console.log('change')
                                            // Get the selected image file
                                            const imageFiles = event.target.files;

                                            // Show the number of images selected

                                            // Empty the images div
                                            cover.innerHTML = '';

                                            if (imageFiles.length > 0) {
                                                // Loop through all the selected images
                                                for (const imageFile of imageFiles) {
                                                    const reader = new FileReader();

                                                    // Convert each image file to a string
                                                    reader.readAsDataURL(imageFile);

                                                    // FileReader will emit the load event when the data URL is ready
                                                    // Access the string using reader.result inside the callback function
                                                    reader.addEventListener('load', () => {
                                                        // Create new <img> element and add it to the DOM
                                                        cover.innerHTML += `
                <div class="image_box">
                    <img src='${reader.result}'>
                    <span class='image_name'>${imageFile.name}</span>
                </div>
            `;
                                                    });
                                                }
                                            } else {
                                                // Empty the images div
                                                cover.innerHTML = '';
                                            }
                                        });

                                        const fileInput = document.getElementById('select-image');
                                        const images = document.getElementById('images');
                                        const totalImages = document.getElementById('total-images');

                                        // Listen to the change event on the <input> element
                                        fileInput.addEventListener('change', (event) => {

                                            // Get the selected image file
                                            const imageFiles = event.target.files;

                                            // Show the number of images selected
                                            totalImages.innerText = imageFiles.length;

                                            // Empty the images div
                                            images.innerHTML = '';

                                            if (imageFiles.length > 0) {
                                                // Loop through all the selected images
                                                for (const imageFile of imageFiles) {
                                                    const reader = new FileReader();

                                                    // Convert each image file to a string
                                                    reader.readAsDataURL(imageFile);

                                                    // FileReader will emit the load event when the data URL is ready
                                                    // Access the string using reader.result inside the callback function
                                                    reader.addEventListener('load', () => {
                                                        // Create new <img> element and add it to the DOM
                                                        images.innerHTML += `
                <div class="image_box">
                    <img src='${reader.result}'>
                    <span class='image_name'>${imageFile.name}</span>
                </div>
            `;
                                                    });
                                                }
                                            } else {
                                                // Empty the images div
                                                images.innerHTML = '';
                                            }
                                        });
                                    </script>


                                <div class=" flex-auto ms-4 vertical-top border-left-custom developer-general-info">
                                    <div class="profile-input-custom d-flex">

                                        <div class="input-custom flex-auto self no-logo">

                                            <input type="text" name="title" placeholder="Type Your Project Name">
                                        </div>

                                    </div>
                                    <div class="profile-input-custom d-flex">

                                        <div class="input-custom flex-auto self">
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
                                            <input type="text" name="location"
                                                   placeholder="Add Project Location">
                                        </div>

                                    </div>

                                    <!--         -------------------------deposit---------------------------------                   -->
                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        Deposit:
                                    </h3>
                                    <div class="profile-input-custom set-deposit-col-margin">

                                        <div class="input-custom w-220 flex-auto self no-logo">

                                            <input type="text" name="deposit" placeholder="Type Here...">
                                        </div>
                                        <div class="input-custom w-220 flex-auto svg-left self no-logo">

                                            <input type="text" placeholder="Add More">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5 7.29167V17.7083M7.29167 12.5H17.7083M21.875 12.5C21.875 17.6777 17.6777 21.875 12.5 21.875C7.32233 21.875 3.125 17.6777 3.125 12.5C3.125 7.32233 7.32233 3.125 12.5 3.125C17.6777 3.125 21.875 7.32233 21.875 12.5Z"
                                                    stroke="#289800" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>

                                        </div>
                                    </div>


                                    <!--                            --------assignment-------------------------------------- -->

                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        Assignment:
                                    </h3>

                                    <div class="profile-input-custom ">

                                        <div id="assi-no"
                                             class="input-custom Assignment-no assignment-active flex-auto self no-logo"
                                             onclick="AssignmentNo()">

                                            <input type="text" readonly placeholder="No" value="No" name="assignment">
                                        </div>
                                        <div id="assi-yes" class="input-custom Assignment-no-secto  self no-logo"
                                             onclick="AssignmentYes()">

                                            <input type="text" placeholder="If Yes, Type Here...">
                                        </div>
                                    </div>


                                    <!--                           -------------------- Maintenance---------------- -->
                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        Maintenance:
                                    </h3>

                                    <div class="profile-input-custom ">

                                        <div class="input-custom w-320 flex-auto self no-logo">

                                            <input type="number" name="maintenance" placeholder="Type Number Here...">
                                        </div>
                                        <span class="dec-----">

                                    per SQ/FT
                                </span>
                                    </div>
                                    <!--                            phases:         -->
                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        Phases:
                                    </h3>
                                    <p class="billing-ch-head">choose type of building: </p>
                                    <div class="profile-radio-custom ">
                                        <div class="new-custom-radio typeofbuild active">
                                            <label>
                                                Low-Rise
                                                <input type="radio" checked="checked" name="typeof" value="low-Rise">
                                            </label>
                                        </div>
                                        <div class="new-custom-radio typeofbuild">
                                            <label>
                                                Mid-Rise
                                                <input type="radio" name="typeof" value="mid-Rise">
                                            </label>
                                        </div>
                                        <div class="new-custom-radio typeofbuild">
                                            <label>
                                                High-Rise
                                                <input type="radio" name="typeof" value="high-Rise">
                                            </label>
                                        </div>
                                        <div class="new-custom-radio typeofbuild ">
                                            <label>
                                                Townhomes
                                                <input type="radio" name="typeof" value="Townhomes">
                                            </label>
                                        </div>

                                    </div>

                                    <div class="profile-input-custom mb-12">

                                        <div class="input-custom flex-auto self no-logo w-100">

                                            <input type="text" placeholder="Type Name Of Phase...">
                                        </div>
                                    </div>
                                    <div class="">
                                        <button class="green-btn in-add-property p-11">Add Pase</button>
                                        <button class="green-gray-raduis ml-12">townhomes,flower</button>
                                    </div>


                                    <!--            -------------------------                compitopn  date-->


                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        Completion Date:
                                    </h3>

                                    <div class="input-custom">
                                        <div class='date' id='datetimepicker'>
                                            <span class="input-group-addon calender-btn">

                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 3.59375C4.74375 3.59375 4.53125 3.38125 4.53125 3.125V1.25C4.53125 0.99375 4.74375 0.78125 5 0.78125C5.25625 0.78125 5.46875 0.99375 5.46875 1.25V3.125C5.46875 3.38125 5.25625 3.59375 5 3.59375Z"
                                                    fill="white"/>
                                                <path
                                                    d="M10 3.59375C9.74375 3.59375 9.53125 3.38125 9.53125 3.125V1.25C9.53125 0.99375 9.74375 0.78125 10 0.78125C10.2563 0.78125 10.4688 0.99375 10.4688 1.25V3.125C10.4688 3.38125 10.2563 3.59375 10 3.59375Z"
                                                    fill="white"/>
                                                <path
                                                    d="M5.3125 9.06245C5.23125 9.06245 5.15 9.04371 5.075 9.01246C4.99375 8.98121 4.93125 8.93745 4.86875 8.8812C4.75625 8.76245 4.6875 8.6062 4.6875 8.43745C4.6875 8.3562 4.70625 8.27495 4.7375 8.19995C4.76875 8.12495 4.8125 8.05621 4.86875 7.99371C4.93125 7.93746 4.99375 7.89369 5.075 7.86244C5.3 7.76869 5.58125 7.81871 5.75625 7.99371C5.86875 8.11246 5.9375 8.27495 5.9375 8.43745C5.9375 8.47495 5.93125 8.51871 5.925 8.56246C5.91875 8.59996 5.90625 8.63745 5.8875 8.67495C5.875 8.71245 5.85625 8.74995 5.83125 8.78745C5.8125 8.8187 5.78125 8.84995 5.75625 8.8812C5.6375 8.9937 5.475 9.06245 5.3125 9.06245Z"
                                                    fill="white"/>
                                                <path
                                                    d="M7.5 9.06254C7.41875 9.06254 7.3375 9.0438 7.2625 9.01255C7.18125 8.9813 7.11875 8.93754 7.05625 8.88129C6.94375 8.76254 6.875 8.60629 6.875 8.43754C6.875 8.35629 6.89375 8.27504 6.925 8.20004C6.95625 8.12504 7 8.0563 7.05625 7.9938C7.11875 7.93755 7.18125 7.89378 7.2625 7.86253C7.4875 7.76253 7.76875 7.8188 7.94375 7.9938C8.05625 8.11255 8.125 8.27504 8.125 8.43754C8.125 8.47504 8.11875 8.5188 8.1125 8.56255C8.10625 8.60005 8.09375 8.63755 8.075 8.67505C8.0625 8.71255 8.04375 8.75004 8.01875 8.78754C8 8.81879 7.96875 8.85004 7.94375 8.88129C7.825 8.99379 7.6625 9.06254 7.5 9.06254Z"
                                                    fill="white"/>
                                                <path
                                                    d="M9.6875 9.06254C9.60625 9.06254 9.525 9.0438 9.45 9.01255C9.36875 8.9813 9.30625 8.93754 9.24375 8.88129C9.21875 8.85004 9.19375 8.81879 9.16875 8.78754C9.14375 8.75004 9.125 8.71255 9.1125 8.67505C9.09375 8.63755 9.08125 8.60005 9.075 8.56255C9.06875 8.5188 9.0625 8.47504 9.0625 8.43754C9.0625 8.27504 9.13125 8.11255 9.24375 7.9938C9.30625 7.93755 9.36875 7.89378 9.45 7.86253C9.68125 7.76253 9.95625 7.8188 10.1312 7.9938C10.2437 8.11255 10.3125 8.27504 10.3125 8.43754C10.3125 8.47504 10.3062 8.5188 10.3 8.56255C10.2937 8.60005 10.2812 8.63755 10.2625 8.67505C10.25 8.71255 10.2313 8.75004 10.2063 8.78754C10.1875 8.81879 10.1562 8.85004 10.1312 8.88129C10.0125 8.99379 9.85 9.06254 9.6875 9.06254Z"
                                                    fill="white"/>
                                                <path
                                                    d="M5.3125 11.25C5.23125 11.25 5.15 11.2313 5.075 11.2C5 11.1688 4.93125 11.125 4.86875 11.0687C4.75625 10.95 4.6875 10.7875 4.6875 10.625C4.6875 10.5437 4.70625 10.4625 4.7375 10.3875C4.76875 10.3062 4.8125 10.2375 4.86875 10.1813C5.1 9.95 5.525 9.95 5.75625 10.1813C5.86875 10.3 5.9375 10.4625 5.9375 10.625C5.9375 10.7875 5.86875 10.95 5.75625 11.0687C5.6375 11.1812 5.475 11.25 5.3125 11.25Z"
                                                    fill="white"/>
                                                <path
                                                    d="M7.5 11.25C7.3375 11.25 7.175 11.1812 7.05625 11.0687C6.94375 10.95 6.875 10.7875 6.875 10.625C6.875 10.5437 6.89375 10.4625 6.925 10.3875C6.95625 10.3062 7 10.2375 7.05625 10.1813C7.2875 9.95 7.7125 9.95 7.94375 10.1813C8 10.2375 8.04375 10.3062 8.075 10.3875C8.10625 10.4625 8.125 10.5437 8.125 10.625C8.125 10.7875 8.05625 10.95 7.94375 11.0687C7.825 11.1812 7.6625 11.25 7.5 11.25Z"
                                                    fill="white"/>
                                                <path
                                                    d="M9.6875 11.2501C9.525 11.2501 9.3625 11.1813 9.24375 11.0688C9.1875 11.0126 9.14375 10.9438 9.1125 10.8626C9.08125 10.7876 9.0625 10.7063 9.0625 10.6251C9.0625 10.5438 9.08125 10.4626 9.1125 10.3876C9.14375 10.3063 9.1875 10.2376 9.24375 10.1813C9.3875 10.0376 9.60625 9.96881 9.80625 10.0126C9.85 10.0188 9.8875 10.0313 9.925 10.0501C9.9625 10.0626 10 10.0813 10.0375 10.1063C10.0688 10.1251 10.1 10.1563 10.1312 10.1813C10.2437 10.3001 10.3125 10.4626 10.3125 10.6251C10.3125 10.7876 10.2437 10.9501 10.1312 11.0688C10.0125 11.1813 9.85 11.2501 9.6875 11.2501Z"
                                                    fill="white"/>
                                                <path
                                                    d="M12.8125 6.15002H2.1875C1.93125 6.15002 1.71875 5.93752 1.71875 5.68127C1.71875 5.42502 1.93125 5.21252 2.1875 5.21252H12.8125C13.0688 5.21252 13.2812 5.42502 13.2812 5.68127C13.2812 5.93752 13.0688 6.15002 12.8125 6.15002Z"
                                                    fill="white"/>
                                                <path
                                                    d="M10 14.2188H5C2.71875 14.2188 1.40625 12.9062 1.40625 10.625V5.3125C1.40625 3.03125 2.71875 1.71875 5 1.71875H10C12.2812 1.71875 13.5938 3.03125 13.5938 5.3125V10.625C13.5938 12.9062 12.2812 14.2188 10 14.2188ZM5 2.65625C3.2125 2.65625 2.34375 3.525 2.34375 5.3125V10.625C2.34375 12.4125 3.2125 13.2812 5 13.2812H10C11.7875 13.2812 12.6562 12.4125 12.6562 10.625V5.3125C12.6562 3.525 11.7875 2.65625 10 2.65625H5Z"
                                                    fill="white"/>
                                            </svg>
                                            choose on calendar

                                             </span>
                                            <input type='text' name="completionDate" class="date-input"/>

                                        </div>
                                    </div>

                                    <!--            -------------------------                pet  date-->


                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        Pet Friendly:
                                    </h3>


                                    <div class="profile-radio-custom mb-2">
                                        <div class="new-custom-radio pet-fre active">
                                            <label>
                                                yes
                                                <input type="radio" name="pet" checked="" value="yes">
                                            </label>
                                        </div>
                                        <div class="new-custom-radio pet-fre ">
                                            <label>
                                                no
                                                <input type="radio" name="pet" value="no">
                                            </label>
                                        </div>


                                    </div>
                                </div>

                            </div>


                        </div>


                        <div class="have-back-shadow add-developer-padding section-input-bdrs-unset mt-70">
                            <h3 class="admin-sec-subtitle admin-sec-title mb-3">
                                Features:
                            </h3>
                            <div class="d-flex feature-box">
                                <div>
                                    <label class="custom-check-box">Vancouver
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div>
                                    <label class="custom-check-box">Vancouver
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div>
                                    <label class="custom-check-box">Vancouver
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div>
                                    <label class="custom-check-box">Vancouver
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div>
                                    <label class="custom-check-box">Vancouver
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                            </div>
                            <div class="profile-input-custom d-flex mt-4">

                                <div class="input-custom flex-auto self no-logo">

                                    <input type="text" placeholder="is there other features? type it down....">
                                </div>

                            </div>

                        </div>


                        <div class="have-back-shadow add-developer-padding section-input-bdrs-unset mt-70">
                            <h3 class="admin-sec-subtitle admin-sec-title mb-3">
                                Building Promotion:
                            </h3>
                            <div class="d-flex">
                                <div>
                                    <div class="promotion-section">
                                        <label for="select-promotion">
                                            <div class="uploader" id="">
                                                <img src="{{asset('img/share-bigsize.svg')}}" alt="">
                                                <p class="uploader-text">upload building’s cover</p>
                                                <p>

                                                </p>
                                            </div>
                                            <input type="file" name="promotion" id="select-promotion"
                                                   style="display: none">
                                        </label>


                                        <div class="preview_image">

                                            <div id="promotion"></div>
                                        </div>
                                    </div>
                                    <script>
                                        const promotionInput = document.getElementById('select-promotion');
                                        const promotion = document.getElementById('promotion');


                                        // Listen to the change event on the <input> element
                                        promotionInput.addEventListener('change', (event) => {
                                            console.log('change')
                                            // Get the selected image file
                                            const imageFiles = event.target.files;

                                            // Show the number of images selected

                                            // Empty the images div
                                            promotion.innerHTML = '';

                                            if (imageFiles.length > 0) {
                                                // Loop through all the selected images
                                                for (const imageFile of imageFiles) {
                                                    const reader = new FileReader();

                                                    // Convert each image file to a string
                                                    reader.readAsDataURL(imageFile);

                                                    // FileReader will emit the load event when the data URL is ready
                                                    // Access the string using reader.result inside the callback function
                                                    reader.addEventListener('load', () => {
                                                        // Create new <img> element and add it to the DOM
                                                        promotion.innerHTML += `
                <div class="image_box">
                    <img src='${reader.result}'>
                    <span class='image_name'>${imageFile.name}</span>
                </div>
            `;
                                                    });
                                                }
                                            } else {
                                                // Empty the images div
                                                promotion.innerHTML = '';
                                            }
                                        });

                                    </script>
                                </div>
                                <div class=" flex-auto ms-4 vertical-top border-left-custom developer-general-info">
                                    <div class="profile-input-custom d-flex">

                                        <div class="input-custom flex-auto self no-logo">

                                            <input type="text"
                                                   placeholder="do you want to add a promotion? type it down....">
                                        </div>

                                    </div>
                                    <div class="profile-textarea-custom">
                                        <textarea name="promotion"
                                                  placeholder="type down description here..."></textarea>

                                    </div>
                                    <title>Integrate Bootstrap Datepicker in Laravel </title>
                                    <link rel="stylesheet"
                                          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
                                    <link rel="stylesheet"
                                          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">

                                </div>

                            </div>

                        </div>

                        <div class="mt-5 mb-5 text-center">
                            <input type="submit" class="btn-green w-50" value="submit">
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection
@section('custom-script')
    <script>
        function AssignmentNo() {

            jQuery('#assi-yes').removeClass('assignment-active')
            jQuery('#assi-yes > input').prop('name', '')
            jQuery('#assi-no').addClass('assignment-active')
            jQuery('#assi-no > input').prop('name', 'assignment')
        }

        function AssignmentYes() {

            jQuery('#assi-no').removeClass('assignment-active')
            jQuery('#assi-no>input').prop('name', '')
            jQuery('#assi-yes').addClass('assignment-active')
            jQuery('#assi-yes>input').prop('name', 'assignment')
        }

        jQuery('.new-custom-radio.typeofbuild').on('click', function () {
            jQuery('.new-custom-radio.typeofbuild').removeClass('active')
            jQuery('.new-custom-radio.typeofbuild').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')
        })

        jQuery('.new-custom-radio.pet-fre').on('click', function () {
            jQuery('.new-custom-radio.pet-fre').removeClass('active')
            jQuery('.new-custom-radio.pet-fre').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        jQuery(function () {
            jQuery('#datetimepicker').datepicker({
                format: "MM-yyyy",
                viewMode: 'months',
                minViewMode: 1
            });
        });
    </script>
@endsection

@extends('app')
@section('content')
    <x-developer.developer-bar active="developer"></x-developer.developer-bar>


    <div class="bread-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brardcurmbs"><p>
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
                            Add Unit
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">


        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger mt-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="admin-sec input-w-unset mt-85">
                    <h3 class="admin-sec-title">
                        Add Unit
                    </h3>

                    <form action="{{route('developer.unit.create' ,$build->id)}}" method="post"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="have-back-shadow add-developer-padding section-input-bdrs-unset add-unit-form">
                            <h3 class="admin-sec-subtitle admin-sec-title mb-3">
                                Add New Unit
                            </h3>
                            <div class="d-flex">


                                <div style="flex: 0 0 219px;">
                                    <label for="select-cover">
                                        <div class="uploader" id="uploader--">
                                            <img src="{{asset('img/share-bigsize.svg')}}" alt="">
                                            <p class="uploader-text">upload building’s photo</p>
                                            <p>

                                            </p>
                                        </div>
                                        <input type="file" id="select-cover" name="floor_plan" multiple
                                               style="display: none">
                                    </label>


                                    <div class="preview_image">
                                        <!-- It will show the total number of files selected -->
                                        <p>
                                            <img src="{{asset('img/share-2.svg')}}" alt="">
                                            <span id="total-images">0</span> File(s) Selected</p>

                                        <!-- All images will display inside this div -->
                                        <div id="images"></div>
                                    </div>
                                </div>


                                <div class="flex-auto ms-4 vertical-top border-left-custom developer-general-info">

                                    <div class="profile-input-custom ">

                                        <div class="input-custom flex-auto w-100 price-input self no-logo">

                                            <input type="text" class="w-100" name="name"
                                                   placeholder="Floor Plan Name"
                                                   value="">
                                        </div>


                                    </div>

                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        <img src="{{asset('img/image%2042(2).svg')}}" alt="">

                                        Choose Unit Phase:
                                    </h3>
                                    <div>
                                        <div class="profile-radio-custom ">
                                            <?php $i = 0 ?>
                                            @foreach($build->phases as $phase)
                                                <div
                                                    class="new-custom-radio green-gray-raduis typeofbuild typeofbuildcheck @if($i == 0) active @endif ">
                                                    <label>
                                                        {{$phase->type}} , {{$phase->name}}
                                                        <input type="radio" checked="checked" name="phase"
                                                               class="typeofbuildcheck" value="{{$phase->id}}">
                                                    </label>
                                                </div>
                                                    <?php $i++; ?>
                                            @endforeach
                                        </div>

                                    </div>

                                    <!--                            --------assignment-------------------------------------- -->


                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        <img src="{{asset('img/house-building%202.svg')}}" alt="">
                                        Floors:
                                    </h3>
                                    <div id="floor-sec-maker">

                                    </div>
                                    <div class="alert alert-danger mt-2 floor-error" style="display: none">
                                        <p class="font-light error-text">please insert valid value</p>
                                    </div>
                                    <div class="profile-input-custom ">

                                        <div class="input-custom floor-input w-320 flex-auto self no-logo">
                                            <input type="number" id="floor-cr" name="" placeholder="Type " value="">
                                        </div>
                                        <div class="d-inline-block add-floor-btn-uses-sec">

                                            <p class="green-btn cursor-pointer in-add-property add-floor-btn-uses"
                                               onclick="addFloor()">
                                                Add
                                            </p>

                                        </div>
                                    </div>


                                    <!--                           -------------------- Maintenance---------------- -->
                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        <img src="{{asset('img/money.svg')}}" alt="">

                                        Price:
                                    </h3>

                                    <div class="profile-input-custom ">
                                        <div>
                                            <div class="profile-radio-custom ">
                                                <div data-moode="single" class="new-custom-radio price-mode  active">
                                                    <label>
                                                        single value
                                                        <input type="radio" checked="checked" name="price-mode"
                                                               class="pricemodecheck" value="">
                                                    </label>
                                                </div>
                                                <div data-moode="range" class="new-custom-radio price-mode">
                                                    <label>
                                                        range value
                                                        <input type="radio" name="price-mode" class="pricemodecheck"
                                                               value="">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-custom flex-auto price-input self no-logo"
                                             style="width: 200px;">

                                            <input type="number" name="start_price"
                                                   placeholder="Type Number Here..."
                                                   value="{{old('price')}}">
                                        </div>
                                        <div class="input-custom flex-auto price-input price-range self no-logo"
                                             style="width: 200px; display: none">

                                            <input type="number" name="end_price"
                                                   placeholder="Type Number Here..."
                                                   value="{{old('price')}}">
                                        </div>


                                    </div>
                                    <!--                            phases:         -->
                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        <img src="{{asset('img/house-building%202.svg')}}" alt="">
                                        Face:
                                    </h3>
                                    <style>

                                        .new-custom-checkbox.unit-face.mb-2 > input {
                                            /*display: block;*/
                                        }

                                    </style>
                                    <div class="profile-radio-custom ">
                                        <label class="new-custom-checkbox unit-face mb-2 active">

                                            unknown
                                            <input type="checkbox" name="face[]" value="unknown" checked>

                                        </label>
                                        <label class="new-custom-checkbox unit-face mb-2">

                                            north
                                            <input type="checkbox" name="face[]" value="north">

                                        </label>
                                        <label class="new-custom-checkbox unit-face mb-2">

                                            north-east
                                            <input type="checkbox" name="face[]" value="north-east">

                                        </label>
                                        <label class="new-custom-checkbox unit-face mb-2">

                                            east
                                            <input type="checkbox" name="face[]" value="east">

                                        </label>
                                        <label class="new-custom-checkbox unit-face mb-2">

                                            south-east
                                            <input type="checkbox" name="face[]" value="south-east">

                                        </label>
                                        <label class="new-custom-checkbox unit-face mb-2">

                                            south
                                            <input type="checkbox" name="face[]" value="south">

                                        </label>
                                        <label class="new-custom-checkbox unit-face mb-2">

                                            south-west
                                            <input type="checkbox" name="face[]" value="south-west">

                                        </label>
                                        <label class="new-custom-checkbox unit-face mb-2">

                                            west
                                            <input type="checkbox" name="face[]" value="west">

                                        </label>
                                        <label class="new-custom-checkbox unit-face mb-2">

                                            north-west
                                            <input type="checkbox" name="face[]" value="north-west">

                                        </label>

                                    </div>


                                    <div class="row unit-custom-padding all-w-unset">


                                        <div class="col-6">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Scalability.svg')}}" alt="">

                                                Unit Size:
                                            </h3>
                                            <div>
                                                <div class="profile-radio-custom ">
                                                    <div data-moode="single" class="new-custom-radio size-mode  active">
                                                        <label>
                                                            single value
                                                            <input type="radio" checked="checked" name="price-mode"
                                                                   class="pricemodecheck" value="">
                                                        </label>
                                                    </div>
                                                    <div data-moode="range" class="new-custom-radio size-mode">
                                                        <label>
                                                            range value
                                                            <input type="radio" name="price-mode" class="pricemodecheck"
                                                                   value="">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-input-custom ">

                                                <div class="input-custom flex-auto self no-logo w-120">

                                                    <input type="text" name="start_size"
                                                           value="{{old('size')}}"
                                                           placeholder="Type Here...">
                                                </div>

                                                <div class="input-custom flex-auto self size-range no-logo w-120"
                                                     style="display: none">

                                                    <input type="text" name="end_size"
                                                           value="{{old('size')}}"
                                                           placeholder="Type Here...">
                                                </div>
                                                <span class="dec----- unit-dec---">

                                                 SQ/FT
                                            </span>
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Combined-Shape.svg')}}" alt="">

                                                Storage:
                                            </h3>
                                            <div>
                                                <div class="profile-radio-custom ">
                                                    <div data-moode="single"
                                                         class="new-custom-radio storage-mode  active">
                                                        <label>
                                                            single value
                                                            <input type="radio" checked="checked" name="price-mode"
                                                                   class="pricemodecheck" value="">
                                                        </label>
                                                    </div>
                                                    <div data-moode="optional" class="new-custom-radio storage-mode">
                                                        <label>
                                                            optional
                                                            <input type="radio" name="price-mode" class="pricemodecheck"
                                                                   value="">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-120 storage-field flex-auto self no-logo">

                                                    <input type="text" name="start_storage"
                                                           value="{{old('storage')}}" placeholder="Type Here...">
                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Parking%20area.svg')}}" alt="">

                                                Parking:
                                            </h3>
                                            <div>
                                                <div class="profile-radio-custom ">
                                                    <div data-moode="single"
                                                         class="new-custom-radio parking-mode  active">
                                                        <label>
                                                            single value
                                                            <input type="radio" checked="checked" name="price-mode"
                                                                   class="pricemodecheck" value="">
                                                        </label>
                                                    </div>
                                                    <div data-moode="optional" class="new-custom-radio parking-mode">
                                                        <label>
                                                          optional
                                                            <input type="radio" name="price-mode" class="pricemodecheck"
                                                                   value="">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-120 flex-auto parking-field self no-logo">

                                                    <input type="text" name="start_parking"
                                                           value="{{old('parking')}}" placeholder="Type Here...">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/image%2045.svg')}}" alt="">

                                                Bedroom:
                                            </h3>

                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-120 flex-auto self no-logo">

                                                    <input type="number" name="start_bedroom"
                                                           value="{{old('bedroom')}}" placeholder="Type Here...">
                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Shower.svg')}}" alt="">

                                                Bathroom:
                                            </h3>

                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-120 flex-auto self no-logo">

                                                    <input type="number" name="start_bathroom"
                                                           value="{{old('bathroom')}}" placeholder="Type Here...">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Grass.svg')}}" alt="">

                                                Garden:
                                            </h3>
                                            <div>
                                                <div class="profile-radio-custom ">
                                                    <div data-moode="single"
                                                         class="new-custom-radio garden-mode  active">
                                                        <label>
                                                            single value
                                                            <input type="radio" checked="checked" name="price-mode"
                                                                   class="pricemodecheck" value="">
                                                        </label>
                                                    </div>
                                                    <div data-moode="range" class="new-custom-radio garden-mode">
                                                        <label>
                                                            range value
                                                            <input type="radio" name="price-mode" class="pricemodecheck"
                                                                   value="">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-input-custom ">

                                                <div class="input-custom self no-logo w-120">

                                                    <input type="number" name="start_garden"
                                                           value="{{old('garden')}}" placeholder="Type Here...">
                                                </div>

                                                <div class="input-custom self no-logo w-120 garden-range"
                                                     style="display: none">

                                                    <input type="number" name="end_garden"
                                                           value="{{old('garden')}}" placeholder="Type Here...">
                                                </div>
                                            </div>
                                            <span class="dec----- unit-dec---">

                                                 SQ/FT
                                            </span>
                                        </div>


                                        <div class="col-6">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Sofa.svg')}}" alt="">

                                                Dens:
                                            </h3>

                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-120 flex-auto self no-logo">

                                                    <input type="text" name="start_dens"
                                                           value="{{old('dens')}}"
                                                           placeholder="Type Here...">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/image%2044.svg')}}" alt="">

                                                Flex:
                                            </h3>

                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-120 flex-auto self no-logo">

                                                    <input type="text" name="start_flex"
                                                           value="{{old('flex')}}"
                                                           placeholder="Type Here...">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/image%2045.svg')}}" alt="">

                                                Balcony:
                                            </h3>
                                            <div>
                                                <div class="profile-radio-custom ">
                                                    <div data-moode="single"
                                                         class="new-custom-radio balcony-mode  active">
                                                        <label>
                                                            single value
                                                            <input type="radio" checked="checked" name="price-mode"
                                                                   class="pricemodecheck" value="">
                                                        </label>
                                                    </div>
                                                    <div data-moode="range" class="new-custom-radio balcony-mode">
                                                        <label>
                                                            range value
                                                            <input type="radio" name="price-mode" class="pricemodecheck"
                                                                   value="">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-input-custom ">

                                                <div class="input-custom self no-logo w-120">

                                                    <input type="number" name="start_balcony"
                                                           value="{{old('balcony')}}" placeholder="Type Here...">
                                                </div>
                                                <div class="input-custom self no-logo w-120 balcony-range"
                                                     style="display: none">

                                                    <input type="number" name="end_balcony"
                                                           value="{{old('balcony')}}" placeholder="Type Here...">
                                                </div>
                                                <span class="dec----- unit-dec---">
                                                    SQ/FT
                                               </span>
                                            </div>
                                        </div>

                                    </div>

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

        const fileInput = document.getElementById('select-cover');

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
                    document.getElementById('uploader--').style.display = "none";
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
                                                        <span onclick="deleteImage()">delete</span>
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
    <script>

        function addFloor() {


            Floor = jQuery('#floor-cr').val()


            if (Floor.length == 0 || ((Number(Floor)) === 0)) {
                jQuery('.floor-error').show()
            } else {

                jQuery('.floor-error').hide()
                html = jQuery('#floor-sec-maker').html()

                html += '  <div class="floor-cart">' +
                    '<p>' +
                    'Floor' + Floor +
                    '</p>' +
                    '<span class="delete-deposit-btn" onclick="deleteFloor(this)"> <svg width="15" height="15" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M10.7489 12.1037L6.15203 16.7006L4.91531 15.4639L9.51221 10.867L4.91531 6.27008L6.1287 5.05668L10.7256 9.65358L15.3225 5.05668L16.5592 6.29341L11.9623 10.8903L16.5592 15.4872L15.3458 16.7006L10.7489 12.1037Z" fill="#4A5568"> &lt; /path&gt;</path></svg>' +
                    '<input type="hidden" name="floor[]" value="' + Floor + '">' +
                    '</div>'


                jQuery('#floor-sec-maker').html(html)
                jQuery('#floor-cr').val('')

            }


        }

        function deleteFloor(e) {
            jQuery(e).parent().remove()
        }

        jQuery('.new-custom-radio.balcony-mode').on('click', function () {

            jQuery('.new-custom-radio.balcony-mode').removeClass('active')
            jQuery('.new-custom-radio.balcony-mode').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')

            mode = jQuery(this).attr('data-moode')
            console.log(mode)
            if (mode === 'single') {
                jQuery('.balcony-range').hide()
            } else {
                jQuery('.balcony-range').show()

            }


        })
        jQuery('.new-custom-radio.flex-mode').on('click', function () {

            jQuery('.new-custom-radio.flex-mode').removeClass('active')
            jQuery('.new-custom-radio.flex-mode').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')

            mode = jQuery(this).attr('data-moode')
            console.log(mode)
            if (mode === 'single') {
                jQuery('.flex-range').hide()
            } else {
                jQuery('.flex-range').show()

            }


        })


        jQuery('.new-custom-radio.den-mode').on('click', function () {

            jQuery('.new-custom-radio.den-mode').removeClass('active')
            jQuery('.new-custom-radio.den-mode').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')

            mode = jQuery(this).attr('data-moode')
            console.log(mode)
            if (mode === 'single') {
                jQuery('.den-range').hide()
            } else {
                jQuery('.den-range').show()

            }


        })

        jQuery('.new-custom-radio.garden-mode').on('click', function () {

            jQuery('.new-custom-radio.garden-mode').removeClass('active')
            jQuery('.new-custom-radio.garden-mode').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')

            mode = jQuery(this).attr('data-moode')
            console.log(mode)
            if (mode === 'single') {
                jQuery('.garden-range').hide()
            } else {
                jQuery('.garden-range').show()

            }


        })


        jQuery('.new-custom-radio.bathroom-mode').on('click', function () {

            jQuery('.new-custom-radio.bathroom-mode').removeClass('active')
            jQuery('.new-custom-radio.bathroom-mode').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')

            mode = jQuery(this).attr('data-moode')
            console.log(mode)
            if (mode === 'single') {
                jQuery('.bathroom-range').hide()
            } else {
                jQuery('.bathroom-range').show()

            }


        })


        jQuery('.new-custom-radio.bedroom-mode').on('click', function () {

            jQuery('.new-custom-radio.bedroom-mode').removeClass('active')
            jQuery('.new-custom-radio.bedroom-mode').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')

            mode = jQuery(this).attr('data-moode')
            console.log(mode)
            if (mode === 'single') {
                jQuery('.bedroom-range').hide()
            } else {
                jQuery('.bedroom-range').show()

            }


        })
        jQuery('.new-custom-radio.parking-mode').on('click', function () {

            jQuery('.new-custom-radio.parking-mode').removeClass('active')
            jQuery('.new-custom-radio.parking-mode').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')

            mode = jQuery(this).attr('data-moode')
            console.log(mode)
            if (mode === 'optional') {
                jQuery('.parking-field').find('input').val('')
                jQuery('.parking-field').hide()
            } else {
                jQuery('.parking-field').show()

            }

        })


        jQuery('.new-custom-radio.price-mode').on('click', function () {

            jQuery('.new-custom-radio.price-mode').removeClass('active')
            jQuery('.new-custom-radio.price-mode').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')

            mode = jQuery(this).attr('data-moode')
            console.log(mode)
            if (mode === 'single') {
                jQuery('.price-range').hide()
            } else {
                jQuery('.price-range').show()

            }


        })

        jQuery('.new-custom-radio.size-mode').on('click', function () {

            jQuery('.new-custom-radio.size-mode').removeClass('active')
            jQuery('.new-custom-radio.size-mode').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')

            mode = jQuery(this).attr('data-moode')
            console.log(mode)
            if (mode === 'single') {
                jQuery('.size-range').hide()
            } else {
                jQuery('.size-range').show()

            }


        })


        jQuery('.new-custom-radio.storage-mode').on('click', function () {

            jQuery('.new-custom-radio.storage-mode').removeClass('active')
            jQuery('.new-custom-radio.storage-mode').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')

            mode = jQuery(this).attr('data-moode')
            console.log(mode)
            if (mode === 'optional') {
                jQuery('.storage-field').find('input').val('')
                jQuery('.storage-field').hide()
            } else {
                jQuery('.storage-field').show()

            }


        })

        jQuery('.new-custom-radio.typeofbuild').on('click', function () {

            jQuery('.new-custom-radio.typeofbuild').removeClass('active')
            jQuery('.new-custom-radio.typeofbuild').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')

        })

        jQuery('.new-custom-checkbox.unit-face>input').on('click', function (e) {

            e.stopPropagation();
        })
        jQuery('.new-custom-checkbox.unit-face').on('click', function (e) {

            // jQuery('.new-custom-radio.unit-face').removeClass('active')
            // jQuery('.new-custom-radio.unit-face').find('input').prop('checked', '')
            // var senderElement = e.target;


            console.log(jQuery(this).hasClass('active'))

            if (jQuery(this).hasClass('active')) {
                jQuery(this).removeClass('active')
                // jQuery(this).find('input').prop('checked', false)

            } else {
                jQuery(this).addClass('active')

                // jQuery(this).find('input').prop('checked', true)


            }
            // e.stopPropagation();
        })


    </script>
@endsection


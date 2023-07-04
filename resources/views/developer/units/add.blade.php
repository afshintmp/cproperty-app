@extends('app')
@section('content')
    <x-developer.developer-bar active="developer"></x-developer.developer-bar>


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
                                    <div>
                                        <input type="file" name="floor_plan" id=""/>
                                    </div>
                                </div>


                                <div class=" flex-auto ms-4 vertical-top border-left-custom developer-general-info">

                                    <div class="profile-input-custom ">

                                        <div class="input-custom flex-auto w-100 price-input self no-logo">

                                            <input type="text"  class="w-100" name="name"
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
                                    <style>
                                        .price-input > input,
                                        .floor-input > input {
                                            width: 100%;
                                            padding-left: 0 !important;
                                            padding-right: 10px !important;
                                        }

                                        .floor-input {
                                            width: 93px !important;
                                        }

                                        .unit-dec---.dec----- {
                                            padding-top: 9px;

                                        }

                                        .unit-custom-padding > .col-4 {
                                            padding-right: 30px !important;
                                        }

                                        .add-unit-form .input-custom.w-320.flex-auto.self.no-logo > input {
                                            width: 100%;
                                        }

                                        .floor-cart > p {
                                            font-size: 16px;
                                        }

                                        .floor-cart {

                                            box-shadow: 0px 4px 38px 3px rgba(0, 0, 0, 0.13);
                                            text-align: center;
                                            display: inline-block;
                                            margin-bottom: 15px;
                                            padding: 11px;
                                            margin-right: 15px;
                                        }

                                        .floor-cart > p {
                                            display: inline-block;
                                            margin-bottom: 0;
                                        }

                                        .floor-cart > .delete-deposit-btn svg {
                                            line-height: 11px !important;
                                        }

                                        .floor-cart > .delete-deposit-btn {
                                            width: 15px;
                                            height: 15px;
                                            margin-top: 5px;
                                            line-height: 12px;

                                        }

                                        .add-floor-btn-uses {
                                            margin-bottom: 0;
                                        }

                                        .add-floor-btn-uses-sec {
                                            margin-left: 15px;
                                        }

                                        .add-floor-btn-uses-sec {

                                        }

                                        .green-btn.cursor-pointer.in-add-property.add-floor-btn-uses {
                                            padding: 9px;
                                            vertical-align: top;
                                            position: relative;
                                        }

                                        .font-light.error-text {
                                            margin-bottom: 0;
                                        }
                                    </style>

                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        <img src="{{asset('img/house-building%202.svg')}}" alt="">
                                        Floors:
                                    </h3>
                                    <div id="floor-sec-maker">
                                        {{--                                        <div class="floor-cart">--}}
                                        {{--                                            <p>--}}
                                        {{--                                                Floor2--}}
                                        {{--                                            </p>--}}
                                        {{--                                            <span class="delete-deposit-btn" onclick="deleteFloor(this)"> <svg--}}
                                        {{--                                                    width="15" height="15" viewBox="0 0 22 22" fill="none"--}}
                                        {{--                                                    xmlns="http://www.w3.org/2000/svg"> <path--}}
                                        {{--                                                        d="M10.7489 12.1037L6.15203 16.7006L4.91531 15.4639L9.51221 10.867L4.91531 6.27008L6.1287 5.05668L10.7256 9.65358L15.3225 5.05668L16.5592 6.29341L11.9623 10.8903L16.5592 15.4872L15.3458 16.7006L10.7489 12.1037Z"--}}
                                        {{--                                                        fill="#4A5568"> &lt; /path&gt;</path></svg></span>--}}
                                        {{--                                            <input type="hidden" name="floors[]">--}}
                                        {{--                                        </div>--}}
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

                                        <div class="input-custom flex-auto price-input self no-logo"
                                             style="width: 200px;">

                                            <input type="number"  name="start_price"
                                                   placeholder="Type Number Here..."
                                                   value="{{old('price')}}">
                                        </div>


                                        <div class="input-custom flex-auto price-input self no-logo"
                                             style="width: 200px;">

                                            <input type="number"  name="end_price"
                                                   placeholder="Type Number Here..."
                                                   value="{{old('price')}}">
                                        </div>


                                    </div>
                                    <!--                            phases:         -->
                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        <img src="{{asset('img/house-building%202.svg')}}" alt="">
                                        Face:
                                    </h3>

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

                                            <div class="profile-input-custom ">

                                                <div class="input-custom flex-auto self no-logo w-120">

                                                    <input type="text"  name="start_size"
                                                           value="{{old('size')}}"
                                                           placeholder="Type Here...">
                                                </div>

                                                <div class="input-custom flex-auto self no-logo w-120">

                                                    <input type="text"  name="end_size"
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

                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-120 flex-auto self no-logo">

                                                    <input type="text"  name="start_storage"
                                                           value="{{old('storage')}}" placeholder="Type Here...">
                                                </div>


                                                <div class="input-custom w-120 flex-auto self no-logo">

                                                    <input type="text"  name="end_storage"
                                                           value="{{old('storage')}}" placeholder="Type Here...">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Parking%20area.svg')}}" alt="">

                                                Parking:
                                            </h3>

                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-120 flex-auto self no-logo">

                                                    <input type="text"  name="start_parking"
                                                           value="{{old('parking')}}" placeholder="Type Here...">
                                                </div>
                                                <div class="input-custom w-120 flex-auto self no-logo">

                                                    <input type="text"  name="end_parking"
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

                                                    <input type="number"  name="start_bedroom"
                                                           value="{{old('bedroom')}}" placeholder="Type Here...">
                                                </div>
                                                <div class="input-custom w-120 flex-auto self no-logo">

                                                    <input type="number"  name="end_bedroom"
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

                                                    <input type="number"  name="start_bathroom"
                                                           value="{{old('bathroom')}}" placeholder="Type Here...">
                                                </div>
                                                <div class="input-custom w-120 flex-auto self no-logo">

                                                    <input type="number"  name="end_bathroom"
                                                           value="{{old('bathroom')}}" placeholder="Type Here...">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Grass.svg')}}" alt="">

                                                Garden:
                                            </h3>

                                            <div class="profile-input-custom ">

                                                <div class="input-custom self no-logo w-120">

                                                    <input type="number" name="start_garden"
                                                           value="{{old('garden')}}" placeholder="Type Here...">
                                                </div>

                                                <div class="input-custom self no-logo w-120">

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

                                                    <input type="text"  name="start_dens"
                                                           value="{{old('dens')}}"
                                                           placeholder="Type Here...">
                                                </div>
                                                <div class="input-custom w-120 flex-auto self no-logo">

                                                    <input type="text"  name="end_dens"
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

                                                    <input type="text"  name="start_flex"
                                                           value="{{old('flex')}}"
                                                           placeholder="Type Here...">
                                                </div>
                                                <div class="input-custom w-120 flex-auto self no-logo">

                                                    <input type="text"  name="end_flex"
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

                                            <div class="profile-input-custom ">

                                                <div class="input-custom self no-logo w-120">

                                                    <input type="number" name="start_balcony"
                                                           value="{{old('balcony')}}" placeholder="Type Here...">
                                                </div>
                                                <div class="input-custom self no-logo w-120">

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

@section('custom-head')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet"/>
    <link
        href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet"
    />
    <link
        href="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css"
        rel="stylesheet"
    />

@endsection
@section('custom-script')
    <script src="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script>
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginFilePoster
        );


        const images = document.getElementById('select-image');


        const pond1 = FilePond.create(images, {
            storeAsFile: true,
            acceptedFileTypes: ['image/*'],
            labelIdle: '<p>Set Builds Images</p>' +
                'Drag & Drop your files or <span class="filepond--label-action"> Browse </span>',
            // stylePanelLayout : 'integrated'
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

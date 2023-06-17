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
                            Add Build
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

                    <form action="{{route('developer.unit.create' ,$build->id)}}" method="post">
                        {{csrf_field()}}
                        <div class="have-back-shadow add-developer-padding section-input-bdrs-unset add-unit-form">
                            <h3 class="admin-sec-subtitle admin-sec-title mb-3">
                                Add New Unit
                            </h3>
                            <div class="d-flex">
                                <div style="flex: 0 0 219px;">
                                    <div>
                                        <input type="file" name="unitImage" id="select-image"/>
                                    </div>
                                </div>


                                <div class=" flex-auto ms-4 vertical-top border-left-custom developer-general-info">


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
                                        .add-unit-form .input-custom.w-320.flex-auto.self.no-logo > input{
                                            width: 100%;
                                        }
                                    </style>

                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        <img src="{{asset('img/house-building%202.svg')}}" alt="">
                                        Floors:
                                    </h3>

                                    <div class="profile-input-custom ">

                                        <div class="input-custom floor-input w-320 flex-auto self no-logo">

                                            <input type="number" required name="floor" placeholder="Type " value="{{old('floor')}}" >
                                        </div>

                                    </div>

                                    <!--                           -------------------- Maintenance---------------- -->
                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        <img src="{{asset('img/money.svg')}}" alt="">

                                        Price:
                                    </h3>

                                    <div class="profile-input-custom ">

                                        <div class="input-custom w-320 flex-auto price-input self no-logo">

                                            <input type="number" required name="price" placeholder="Type Number Here..." value="{{old('price')}}">
                                        </div>


                                    </div>
                                    <!--                            phases:         -->
                                    <h3 class="admin-sec-subtitle admin-sec-title">
                                        <img src="{{asset('img/house-building%202.svg')}}" alt="">
                                        Face:
                                    </h3>

                                    <div class="profile-radio-custom ">
                                        <div class="new-custom-radio unit-face active">
                                            <label>
                                                north
                                                <input type="radio"  name="face" value="north" checked>
                                            </label>
                                        </div>
                                        <div class="new-custom-radio unit-face">
                                            <label>
                                                north-east
                                                <input type="radio"  name="face" value="north-east">
                                            </label>
                                        </div>
                                        <div class="new-custom-radio unit-face">
                                            <label>
                                                east
                                                <input type="radio" name="face" value="east">
                                            </label>
                                        </div>
                                        <div class="new-custom-radio unit-face">
                                            <label>
                                                south-east
                                                <input type="radio" name="face" value="south-east">
                                            </label>
                                        </div>
                                        <div class="new-custom-radio unit-face">
                                            <label>
                                                south
                                                <input type="radio" name="face" value="south">
                                            </label>
                                        </div>
                                        <div class="new-custom-radio unit-face">
                                            <label>
                                                south-west
                                                <input type="radio" name="face" value="south-west">
                                            </label>
                                        </div>
                                        <div class="new-custom-radio unit-face">
                                            <label>
                                                west
                                                <input type="radio" name="face" value="west">
                                            </label>
                                        </div>
                                        <div class="new-custom-radio unit-face">
                                            <label>
                                                north-west
                                                <input type="radio" name="face" value="north-west">
                                            </label>
                                        </div>

                                    </div>


                                    <div class="row unit-custom-padding">
                                        <div class="col-4">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Scalability.svg')}}" alt="">

                                                Unit Size:
                                            </h3>

                                            <div class="profile-input-custom d-flex">

                                                <div class="input-custom w-320 flex-auto self no-logo">

                                                    <input type="text" required name="size" value="{{old('size')}}" placeholder="Type Here...">
                                                </div>
                                                <span class="dec----- unit-dec---">

                                                 SQ/FT
                                            </span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Combined-Shape.svg')}}" alt="">

                                                Storage:
                                            </h3>

                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-320 flex-auto self no-logo">

                                                    <input type="text" required name="storage" value="{{old('storage')}}" placeholder="Type Here...">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Parking%20area.svg')}}" alt="">

                                                Parking:
                                            </h3>

                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-320 flex-auto self no-logo">

                                                    <input type="text" required name="parking" value="{{old('parking')}}" placeholder="Type Here...">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/image%2045.svg')}}" alt="">

                                                Bedroom:
                                            </h3>

                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-320 flex-auto self no-logo">

                                                    <input type="number" required name="bedroom" value="{{old('bedroom')}}" placeholder="Type Here...">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Shower.svg')}}" alt="">

                                                Bathroom:
                                            </h3>

                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-320 flex-auto self no-logo">

                                                    <input type="number" required name="bathroom" value="{{old('bathroom')}}" placeholder="Type Here...">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Grass.svg')}}" alt="">

                                                Garden:
                                            </h3>

                                            <div class="profile-input-custom d-flex">

                                                <div class="input-custom w-320 flex-auto self no-logo">

                                                    <input type="number" required name="garden" value="{{old('garden')}}" placeholder="Type Here...">
                                                </div>
                                                <span class="dec----- unit-dec---">

                                                 SQ/FT
                                            </span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/Sofa.svg')}}" alt="">

                                                Dens:
                                            </h3>

                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-320 flex-auto self no-logo">

                                                    <input type="text" required name="den" value="{{old('gden')}}" placeholder="Type Here...">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/image%2044.svg')}}" alt="">

                                                Flex:
                                            </h3>

                                            <div class="profile-input-custom ">

                                                <div class="input-custom w-320 flex-auto self no-logo">

                                                    <input type="text" required name="flex" value="{{old('flex')}}" placeholder="Type Here...">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <h3 class="admin-sec-subtitle admin-sec-title">
                                                <img src="{{asset('img/image%2045.svg')}}" alt="">

                                                Balcony:
                                            </h3>

                                            <div class="profile-input-custom d-flex">

                                                <div class="input-custom w-320 flex-auto self no-logo">

                                                    <input type="number" required name="balcony" value="{{old('balcony')}}" placeholder="Type Here...">
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
        jQuery('.new-custom-radio.typeofbuild').on('click', function () {

            jQuery('.new-custom-radio.typeofbuild').removeClass('active')
            jQuery('.new-custom-radio.typeofbuild').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')
        })

        jQuery('.new-custom-radio.unit-face').on('click', function () {

            jQuery('.new-custom-radio.unit-face').removeClass('active')
            jQuery('.new-custom-radio.unit-face').find('input').prop('checked', '')
            jQuery(this).addClass('active')
            jQuery(this).find('input').prop('checked', 'checked')
        })

    </script>

@endsection

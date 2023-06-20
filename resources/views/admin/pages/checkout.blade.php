@extends('admin.app')
@section('custom-head')
    <x-head.tinymce-config/>
@endsection
@section('content')
    @if(session('success'))

        <div class="alert alert-success">
            page was updated
        </div>
    @endif
    <h3 class="pt-4 mb-4">
        page setting : <strong>checkout</strong>
    </h3>
    <form action="{{route('admin.page.checkout.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="row">
            <div class="mb-3 col-12">
                <label class="form-label" for="">checkout role text :</label>

                <textarea id="myeditorinstance" name="description">{!! $page?->content !!}</textarea>
            </div>
        </div>
        <div class="col">

            <input class="btn btn-primary" type="submit" value="save">
        </div>
        <br><br><br><br><br>

    </form>

@endsection

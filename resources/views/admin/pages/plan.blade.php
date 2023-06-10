@extends('admin.app')
@section('custom-head')
    <x-head.tinymce-config/>
@endsection
@section('content')
    <h3 class="pt-4 mb-4">
        page setting : <strong>plans</strong>
    </h3>
    <form action="" method="post">
        <div class="row">
            <div class="mb-3 col-12">
                <label class="form-label" for="">thumbnail</label>
                <input type="text" class="form-control" name="thumbnail" value="">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label" for="">text :</label>
                <textarea id="myeditorinstance" name="description"></textarea>
            </div>

            <div class="col">

                <input class="btn btn-primary" type="submit" value="save">
            </div>
        </div>
    </form>

@endsection

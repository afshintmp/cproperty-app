@extends('admin.app')
@section('custom-head')
    <x-head.tinymce-config/>
@endsection
@section('content')
    <h3 class="pt-4 mb-4">
        page setting : <strong>plans</strong>
    </h3>
    <form action="{{route('admin.page.plan.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="mb-3 col-12">
                <label class="form-label" for="">title</label>
                <input type="text" class="form-control" name="title" value="{{$page->title}}">
            </div>


            <div class="mb-3 col-8">
                <label class="form-label" for="">text :</label>

                <textarea id="myeditorinstance" name="description">{!! $page->content !!}</textarea>
            </div>
            <div class="mb-3 col-4">
                {{$page->image}}
                <label class="form-label" for="">thumbnail</label>
                <input type="file" class="form-control" name="file" value="">
            </div>
            <div class="col">

                <input class="btn btn-primary" type="submit" value="save">
            </div>
        </div>
    </form>

@endsection

@extends('admin/app')
@section('custom-head')
    <x-head.tinymce-config/>
@endsection
@section('content')
    <div class="mt-5">
        @if(session('success'))

            <div class="alert alert-success">
                plan was updated
            </div>
        @endif
        <h4>
            edit plan :
            <strong>
                {{$plan->title}}
            </strong>
        </h4>
            <style>
                .readonly:focus{
                    background: #dfdfdf;
                }
                .readonly{
                    background: #dfdfdf;
                }
            </style>

        <form action="{{route('admin.plans.update' , $plan->id)}}" method="post">
            {{csrf_field()}}
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label" for="">Title :</label>
                    <input type="text" class="form-control readonly" name="title" readonly value="{{$plan->title}}">

                </div>
                <div class="mb-3 col-6">
                    <label class="form-label" for="">Tag :</label>
                    <input type="text" class="form-control readonly" name="tag"  readonly value="{{$plan->tag}}">
                </div>
            </div>
            <di class="row">
                <div class="mb-3 col-6">
                    <label class="form-label" for="">Time credit :</label>
                    <input type="number" class="form-control readonly" name="time_credit"  readonly value="{{$plan->time_credit}}">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label" for="">Price ($):</label>
                    <input type="number" class="form-control" name="price" value="{{$plan->price}}">
                </div>
            </di>
            <div class="mb-3">
                <label class="form-label" for="">Description :</label>
                <textarea id="myeditorinstance" name="description">{{$plan->description}}</textarea>
            </div>


            <input class="btn btn-primary" type="submit" value="save">
        </form>
            <br><br><br>
    </div>
@endsection

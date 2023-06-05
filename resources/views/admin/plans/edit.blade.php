@extends('admin/app')
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


        <form action="{{route('admin.plans.update' , $plan->id)}}" method="post">
            {{csrf_field()}}
            <div class="mb-3">
                <label class="form-label" for="">Title :</label>
                <input type="text"  class="form-control" name="title" value="{{$plan->title}}">

            </div>
            <div class="mb-3">
                <label class="form-label" for="">Description :</label>
                <textarea style="height: 200px"  class="form-control" name="description">{{$plan->description}}</textarea>

            </div>
            <div class="mb-3">
                <label class="form-label" for="">Credit :</label>
                <input type="number"  class="form-control" name="">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Price ($):</label>
                <input type="number" class="form-control" name="price" value="{{$plan->price}}">
            </div>

            <input class="btn btn-primary" type="submit" value="save">
        </form>
    </div>
@endsection

@extends('admin.app')
@section('content')

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
    <div class="mt-3 mb-3">
        <h3>add new feature :</h3>
        <form action="{{route('admin.features.create')}}" method="post">
            {{csrf_field()}}
            <div class="row">
                <div class="col-4">
                    <div class="form-group">

                        <input type="text" placeholder="name" name="name" class="form-control">
                    </div>
                </div>
                <div class="col-4" style="vertical-align: bottom">

                    <input type="submit" class="btn btn-primary" value="save">
                </div>
            </div>

        </form>

    </div>
    <hr>
    <h3>
        features list :
    </h3>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th class="col">name</th>
                <th>#</th>
            </tr>
            </thead>
            <tbody>
            @forelse($features as $feature)
                <tr>
                    <td>{{$feature->name}}</td>
                    <td>
                        <form action="{{route('admin.features.delete' )}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="featureId" value="{{$feature->id}}">
                            <input type="submit" value="delete" class="btn btn-sm btn-danger">

                        </form>
                    </td>
                </tr>


            @empty
                <tr>
                    <td colspan="4">
                        features not found
                    </td>
                </tr>
            @endforelse


            </tbody>
        </table>
    </div>
@endsection

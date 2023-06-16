@extends('admin/app')
@section('content')

    @if(session('success'))

        <div class="alert alert-success mt-2">
            {{session('success')}}
        </div>
    @endif
    <h3 class="mt-3">edit user : <strong>
            {{ $user->name  }}
        </strong></h3>
    <style>
        .bdrs-- {
            -webkit-border-radius: 0.375rem;
            -moz-border-radius: 0.375rem;
            border-radius: 0.375rem;
        }
    </style>
    <form action="{{route('admin.users.update' , $user->id)}}" method="post">
        {{csrf_field()}}

        <form>
            <div class="mt-2">
                <label for="">Name :</label>
                <input type="text" required class="form-control" name="name" value="{{$user->name}}">
            </div>
            <div class="mt-2">
                <label for="">Email :</label>
                <input type="email" required class="form-control" name="email" value="{{$user->email}}">
            </div>

            <div class="mt-3 p-3 border bdrs--">
                <p class="fw-bold">add role to user :</p>
                @foreach($roles as $role)
                    <label for="{{'rol' . $role->id}}">
                        <input type="checkbox" {{ ($user->roles->contains($role)) ? 'checked' : '' }}  name="role[]"
                               id="{{'rol' . $role->id}}" value="{{$role->name}}">
                        {{$role->name}}
                    </label>
                @endforeach
            </div>
            <div class="mt-3 p-3 border bdrs--">
                <p class="fw-bold">add permissions to user :</p>
                @foreach($permissions as $permission)
                    <label for="{{'permission' . $permission->id}}">
                        <input type="checkbox"
                               {{ ($user->permissions->contains($permission)) ? 'checked' : '' }} name="permission[]"
                               id="{{'permission' . $permission->id}}"
                               value="{{$permission->name}}">
                        {{$permission->name}}
                    </label>

                @endforeach
            </div>


            <input class="btn btn-primary mt-3" type="submit" value="save">

        </form>
        <form action="{{route('admin.users.passwordUpdate' , $user->id)}}" method="post">
            {{csrf_field()}}

            <div class="mt-5">
                <label for="">Change Password :</label>
                <div class="row">
                    <div class="col-8">
                        <input type="text" required id="myInput" class="form-control" name="password" value="">
                    </div>

                </div>
            </div>
            <input class="btn btn-primary mt-2" type="submit" value="change password">


        </form>

@endsection



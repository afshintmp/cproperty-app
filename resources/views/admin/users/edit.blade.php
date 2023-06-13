@extends('admin/app')
@section('content')

    @if(session('success'))

        <div class="alert alert-success">
            user was updated
        </div>
    @endif

    <form action="{{route('admin.users.update' , $user->id)}}" method="post">
        {{csrf_field()}}

        <div>
            <div class="mt-2">
                <label for="">Name :</label>
                <input type="text" required class="form-control" name="name" value="{{$user->name}}">
            </div>
            <div class="mt-2">
                <label for="">Email :</label>
                <input type="email" required class="form-control" name="email" value="{{$user->email}}">
            </div>

            <div class="mt-2">
                <p class="fw-bold">add role to user :</p>
                @foreach($roles as $role)
                    <label for="{{'rol' . $role->id}}">
                        <input type="checkbox" {{ ($user->roles->contains($role)) ? 'checked' : '' }}  name="role[]"
                               id="{{'rol' . $role->id}}" value="{{$role->name}}">
                        {{$role->name}}
                    </label>
                @endforeach

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

            <input class="btn btn-primary" type="submit" value="save">




            <div class="mt-2">
                <label for="">Password :</label>
                <div class="row">
                    <div class="col-8">
                        <input type="text" required id="myInput" class="form-control" name="password" value="">
                    </div>

                </div>
            </div>
            <input class="btn btn-primary mt-2" type="submit" value="change password">
        </div>



    </form>

@endsection



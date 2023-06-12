@extends('admin/app')
@section('content')
    @if(session('error'))

        <div class="alert alert-danger mt-4">
            {{session('error')}}
        </div>
    @endif
    <h3 class="mt-4">add new user</h3>
    <form action="{{route('admin.users.create')}}" method="post">
        {{csrf_field()}}
        <div>
            <div class="mt-2">
                <label for="">Name :</label>
                <input type="text" required class="form-control" name="name" value="">
            </div>
            <div class="mt-2">
                <label for="">Email :</label>
                <input type="email" required class="form-control" name="email" value="">
            </div>
            <div class="mt-2">
                <label for="">Password :</label>
                <div class="row">
                    <div class="col-8">
                        <input type="password" required id="myInput" class="form-control" name="password" value="">
                    </div>
                    <div class="col-4">
                      <input type="checkbox" class="d-inline-block" onclick="myFunction()">Show Password
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <p class="fw-bold">add role to user :</p>
                @foreach($roles as $role)
                    <label for="{{'rol' . $role->id}}">
                        <input type="checkbox" name="role[]"
                               id="{{'rol' . $role->id}}" value="{{$role->name}}">
                        {{$role->name}}
                    </label>
                @endforeach

            </div>
            <div class="mt-2">
                <p class="fw-bold">add permissions to user :</p>
                @foreach($permissions as $permission)
                    <label for="{{'permission' . $permission->id}}">
                        <input type="checkbox"
                               name="permission[]"
                               id="{{'permission' . $permission->id}}"
                               value="{{$permission->name}}">
                        {{$permission->name}}
                    </label>

                @endforeach
            </div>


            <input class="btn btn-primary" type="submit" value="save">
        </div>
    </form>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endsection



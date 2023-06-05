<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@if(session('success'))

    <div class="alert alert-success">
        user was updated
    </div>
@endif

<form action="{{route('users.update' , $user->id)}}" method="post">
    {{csrf_field()}}
    <div>
        <p>add permissions to user</p>
        @foreach($permissions as $permission)
            <label for="{{'permission' . $permission->id}}">
                <input type="checkbox" {{ ($user->permissions->contains($permission)) ? 'checked' : '' }} name="permission[]" id="{{'permission' . $permission->id}}"
                       value="{{$permission->name}}">
                {{$permission->name}}
            </label>

        @endforeach
    </div>
    <div>
        <p>add role to user</p>
        @foreach($roles as $role)
            <label for="{{'rol' . $role->id}}">
                <input type="checkbox" {{ ($user->roles->contains($role)) ? 'checked' : '' }}  name="role[]" id="{{'rol' . $role->id}}" value="{{$role->name}}">
                {{$role->name}}
            </label>
        @endforeach

    </div>
    <input type="submit">
</form>
</body>
</html>



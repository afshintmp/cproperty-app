@extends('admin/app')
@section('content')

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
@endsection



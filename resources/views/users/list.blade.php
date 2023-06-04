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

<table>
    <tr>
        <td>name</td>
        <td>email</td>
        <td>role</td>
        <td>operation</td>
    </tr>
    @forelse($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @foreach($user->roles as $role)

                    {{$role->name}}
                @endforeach
            </td>
            <td>
                <a href="{{route('users.edit' , $user->id)}}">edit</a>
            </td>
        </tr>

    @empty
        <tr>
            <td colspan="4">
                users not found
            </td>
        </tr>
    @endforelse


</table>

</body>
</html>

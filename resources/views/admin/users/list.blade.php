@extends('admin/app')
@section('content')

    <h2 class="mt-5">users</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th class="col">name</th>
                <th class="col">email</th>
                <th class="col">verify</th>
                <th class="col">role</th>
                <th class="col">operation</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->email_verified_at}}</td>
                    <td>
                        @foreach($user->roles as $role)

                            {{$role->name}}
                        @endforeach
                    </td>
                    <td>
                        <a href="{{route('admin.users.edit' , $user->id)}}">edit</a>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="4">
                        users not found
                    </td>
                </tr>
            @endforelse


            </tbody>
        </table>
    </div>






@endsection

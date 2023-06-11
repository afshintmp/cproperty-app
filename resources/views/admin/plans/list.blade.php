@extends('admin/app')
@section('content')

    <h2 class="mt-5">users</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th class="col">name</th>
                <th class="col">credit</th>
                <th class="col">price</th>
                <th class="col">operation</th>
            </tr>
            </thead>
            <tbody>
            @forelse($plans as $plan)
                <tr>
                    <td>{{$plan->title}}</td>
                    <td>
                        {{$plan->time_credit}} mounth
                    </td>
                    <td>
                        {{$plan->price}} $
                    </td>

                    <td>
                        <a href="{{route('admin.plans.edit' , $plan->id)}}">edit</a>
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

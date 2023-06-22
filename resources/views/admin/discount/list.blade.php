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
        <h3>add new discount :</h3>
        <form action="{{route('admin.discount.store')}}" method="post">
            {{csrf_field()}}
            <div class="row">
                <div class="col-2">
                    <div class="form-group">

                        <input type="number" required placeholder="present" name="present" class="form-control">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">

                        <input type="number" required placeholder="consumption limit" name="limit_uses"
                               class="form-control">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <input type="text" required id="datetimepicker" placeholder="expire time" name="expire_time"
                               class="form-control">

                    </div>
                </div>
                <div class="col-2" style="vertical-align: bottom">

                    <input type="submit" class="btn btn-primary" value="add">
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
                <th class="col">code</th>
                <th class="col">consumption limit</th>
                <th class="col">expire time</th>
                <th>#</th>
            </tr>
            </thead>
            <tbody>
            @forelse($coupons as $coupon)
                <tr>
                    <td>{{$coupon->code}}</td>
                    <td>{{$coupon->limit_uses}}</td>
                    <td>{{$coupon->expire_time}}</td>
                    <td>
                        <form action="{{route('admin.discount.delete' )}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="couponId" value="{{$coupon->id}}">
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
@section('custom-footer')

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        jQuery(function () {
            jQuery('#datetimepicker').datepicker({
                format: "yyyy-mm-dd",
            });
        });
    </script>

@endsection

@section('custom-head')
    {{--    <link rel="stylesheet"--}}
    {{--          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">

@endsection

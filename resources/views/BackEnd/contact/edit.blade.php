@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Contact
            <small>Edit</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="" method="POST">
            @include('BackEnd.Display_error.error')
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" name="name" value="{!! old('name',isset($data) ? $data['name'] : null) !!}" />
            </div>
            <div class="form-group">
                <label>address</label>
                <input class="form-control" name="address" value="{!! old('address',isset($data) ? $data['address'] : null) !!}" />
            </div>
            <div class="form-group">
                <label>phone</label>
                <input class="form-control" name="phone" value="{!! old('phone',isset($data) ? $data['phone'] : null) !!}" />
            </div>
            <div class="form-group">
                <label>email</label>
                <input class="form-control" name="email" value="{!! old('email',isset($data) ? $data['email'] : null) !!}" />
            </div>

            <div class="form-group">
                <label>receive</label>
                <label class="radio-inline">
                    <input name="sex" value="1"type="radio"
                           @if($data['receive']==1)

                           checked="checked"
                            @endif
                    >yourself
                </label>
                <label class="radio-inline">
                    <input name="sex" value="2" type="radio"

                           @if($data['receive']==2)
                           checked="checked"
                            @endif
                    >dif yourself
                </label>
            </div>

            <button type="submit" class="btn btn-default">User Edit</button>
        <form>
    </div>
@endsection()
@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">User
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
                <input class="form-control" name="txtUser" value="{!! old('txtUser',isset($data) ? $data['name'] : null) !!}" disabled />
            </div>
            {{--<div class="form-group">--}}
                {{--<label>Username</label>--}}
                {{--<input class="form-control" name="txtUser" value="{!! old('txtUser',isset($data) ? $data['name'] : null) !!}"/>--}}
            {{--</div>--}}
            <div class="form-group">
                <label>Password</label>
                <input type="password"  class="form-control" name="txtPass" placeholder="Please Enter Password" />
            </div>
            <div class="form-group">
                <label>RePassword</label>
                <input type="password"  class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" value="{!! old('txtEmail',isset($data) ? $data['email'] : null) !!}" class="form-control" name="txtEmail" placeholder="Please Enter Email" />
            </div>
            <div class="form-group">
                <label>User Level</label>
                <label class="radio-inline">
                    <input name="sex" value="1"type="radio"
                    @if($data['rule_id']==1)

                        checked="checked"
                     @endif
                    >Admin
                </label>
                <label class="radio-inline">
                    <input name="sex" value="2" type="radio"

                   @if($data['rule_id']==2)
                    checked="checked"
                   @endif
                    >Member
                </label>
            </div>
            <button type="submit" class="btn btn-default">User Edit</button>
        <form>
    </div>
@endsection()
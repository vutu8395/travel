@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">User
            <small>Add</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        @include('BackEnd.Display_error.error')
        <form action="{!! url('/BackEnd/user/add') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="form-group">
                <label>Username</label>
                <input value="{!! old('txtUser') !!}" class="form-control" name="txtUser" placeholder="Please Enter Username" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" />
            </div>
            <div class="form-group">
                <label>RePassword</label>
                <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input value="{!! old('txtEmail') !!}" type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" />
            </div>

            <div class="form-group">
                <label>user lever</label>
                <label class="radio-inline">
                    <input type="radio" name="sex" value="1"> Admin
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sex" value="2"> Member
                </label>
            </div>

            <button type="submit" class="btn btn-default">User Add</button>
            {{--<button type="reset" class="btn btn-default">Reset</button>--}}
        <form>
    </div>
@endsection()
@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Contact
            <small>Add</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        @include('BackEnd.Display_error.error')
        <form action="{!! url('BackEnd/contact/add') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="form-group">
                <label>Username</label>
                <input value="{!! old('name') !!}" class="form-control" name="name" placeholder="Please Enter username" />
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input value="{!! old('phone') !!}" type="text" class="form-control" name="phone" placeholder="Please Enter Phone number" />
            </div>
            <div class="form-group">
                <label>email address</label>
                <input value="{!! old('email') !!}" type="email" class="form-control" name="email" placeholder="Please Enter email" />
            </div>
            <div class="form-group">
                <label>address</label>
                <input value="{!! old('address') !!}" type="text" class="form-control" name="address" placeholder="Please Enter address" />
            </div>
            <div class="form-group">
                <label>receive</label>
                <label class="radio-inline">
                    <input checked="checked" type="radio" name="sex" value="1"> yourself
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sex" value="2"> different yourself
                </label>
            </div>

            <button type="submit" class="btn btn-default">submit</button>
        <form>
    </div>
@endsection()
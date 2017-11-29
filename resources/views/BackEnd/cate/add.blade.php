@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Category
            <small>Add</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="{!! route('BackEnd.cate.getAdd') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

            {{--hien thi thong bao loi khi ng dung nhap sai thong tin--}}
            @include('BackEnd.Display_error.error')
            {{--ket thuc thong bao loi voi ng dung nha sai thong tin--}}
            <div class="form-group">
                <label>Category Parent</label>
                <select class="form-control" name="sltParent">
                    <option value="0">Please Choose Category</option>

                    {{--de quy. viet trong ->app/trongpham/function--}}

                    <?php cate_parent($parent);?>

                    {{--<option value="0">Please Choose Category</option>--}}

                    {{--@foreach($parent as  $item)--}}
                        {{--<option value="">{!! $item["name"] !!}</option>--}}
                    {{--@endforeach()--}}
                </select>
            </div>

            <div class="form-group">
                <label> Name</label>
                <input class="form-control" name="txtName" placeholder="Please Enter Name" />
            </div>

            <div class="form-group">
                <label> type</label>
                <input class="form-control" name="type" placeholder="Please Enter Name" />
            </div>

            <button type="submit" class="btn btn-default">SubMit</button>
            {{--<button type="reset" class="btn btn-default">Reset</button>--}}
        <form>
    </div>
@endsection()

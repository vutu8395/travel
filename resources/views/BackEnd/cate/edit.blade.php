@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Category
            <small>Edit</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            {{--hien thi thong bao loi khi ng dung nhap sai thong tin--}}
            @include('BackEnd.Display_error.error')
            {{--ket thuc thong bao loi voi ng dung nha sai thong tin--}}
            <div class="form-group">
                <label>Category Parent</label>
                <select class="form-control" name="sltParent">
                    <option value="0">Please Choose Category</option>
                    <?php  cate_parent( $parent, 0, "--", $data['parentId']) ?>
                </select>
            </div>

            <div class="form-group">
                <label>Name</label>
                <input class="form-control" value="{!! old('txtName', isset($data)? $data['name']: null) !!}" name="txtName" placeholder="Please Enter Category Name" />
            </div>
            <div class="form-group">
                <label>type</label>
                <input class="form-control" value="{!! old('type', isset($data)? $data['type']: null) !!}" name="type" placeholder="Please Enter data type" />
            </div>
            <button type="submit" class="btn btn-default">Category Edit</button>
            {{--<button type="reset" class="btn btn-default">Reset</button>--}}
        <form>
    </div>
@endsection()

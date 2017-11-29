@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Product
            <small>Add</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <form action="{!! url('/BackEnd/product/add') !!}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="col-lg-7" style="padding-bottom:120px">
            {{--hien thi thong bao loi khi ng dung nhap sai thong tin--}}
            @include('BackEnd.Display_error.error')
            {{--ket thuc thong bao loi voi ng dung nha sai thong tin--}}
            <div class="form-group">
                <label>Category Parent</label>
                <select class="form-control" name="sltParent">
                    <option value="">Please Choose Category</option>
                    <?php cate_parent($cate,0,"--",old('sltParent'));?>
                </select>

            </div>

            <div class="form-group">
                <label>Name</label>
                <input class="form-control" value="{!! old('txtName') !!}" name="txtName" placeholder="Please Enter Username" />
            </div>

            <div class="form-group">
                <label>Price</label>
                <input class="form-control" value="{!! old('txtPrice') !!}" type="number" name="txtPrice" placeholder="Please Enter Password" />
            </div>

            <div class="form-group">
                <label>discount</label>
                <input class="form-control"  value="{!! old('discount') !!}" type="number" name="discount" placeholder="Please Enter Category Keywords" />
            </div>

            <div class="form-group">
                <label>hot</label>
                <input class="form-control"  value="{!! old('hot') !!}" type="number" name="hot" placeholder="Please Enter hot" />
            </div>
            <div class="form-group">
                <label>Images</label>
                <input type="file" name="fImages" value="{!! old('fImages') !!}">
            </div>

            <button type="submit" class="btn btn-default">Product Add</button>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4">
            @for($i=1; $i<=5;$i++)
                <div class="form-group">
                    <label>image product detail{!! $i !!}</label>
                    <input type="file" name="fProductdetail[]" />
                </div>
            @endfor
        </div>
    </form>
@endsection()
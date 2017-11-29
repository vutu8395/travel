@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Product
            <small>Edit</small>
        </h1>
    </div>
    <style>
        .icon_del
        {
            position: relative;
            top:-90px; left: 10px;
        }
        .icon_del:hover{
            cursor: pointer;
        }
        .btn-circle{
            padding: 4px 7px;
        }
        #insert
        {
            margin-top: 20px;
        }
    </style>
    <!-- /.col-lg-12 -->
    <form action="" method="POST" enctype="multipart/form-data" name="frmEditProduct">
        <div class="col-lg-7" style="padding-bottom:120px">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            @include('BackEnd.Display_error.error')
            <div class="form-group">
                <label>Category Parent</label>
                <select class="form-control" name="sltParent">
                    <option value="">Please Choose Category</option>
                    <!--tạo hàm đệ quy-->
                    <?php  cate_parent($cate, 0,"--", $product['cate_id']); ?>
                </select>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="txtName" value="{!! old('txtName', isset($product)? $product['name']: null) !!}" placeholder="Please Enter Username" />
            </div>
            <div class="form-group">
                <label>Price</label>
                <input class="form-control" name="txtPrice" value="{!! old('txtPrice', isset($product)? $product['price']: null) !!}" placeholder="Please Enter Password" />
            </div>
            <div class="form-group">
                <label>image curent</label>
                <img style="height: 200px; width: 200px; margin-left: 30px" src="{!! asset('resources/upload/'.$product['image']) !!}">
                <input type="hidden" name="img_curent" value="{!! $product['image'] !!}">
            </div>
            <div class="form-group">
                <label>Images</label>
                <input type="file" name="fImages">
            </div>
            <div class="form-group">
                <label>hot</label>
                <input class="form-control" name="hot" value="{!! old('hot', isset($product)? $product['hot']: null) !!}" placeholder="Please Enter hot" />
            </div>

            <div class="form-group">
                <label>discount</label>
                <input class="form-control" name="discount" value="{!! old('hot', isset($product)? $product['discount']: null) !!}" placeholder="Please Enter discount" />
            </div>
            <button type="submit" class="btn btn-default">Product Edit</button>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4">
            @foreach($product_image as $key => $item)
                <div class="form-group" id="{!! $key !!}">
                    <img style="width: 200px; height: 200px; margin-top: 20px;" src="{!! asset('resources/upload/detail/'.$item['image']) !!} " idHinh="{!! $item['id'] !!}" id="{!! $key !!}">
                    <a href="javascript:void(0)" type="button" id="del_img_demo" class="btn-danger btn-circle icon_del"><i class="fa fa-times"></i></a>
                </div>
            @endforeach()
            {{--// viet nut nhan tao ra cac button them anh trong myscript = jquery--}}
            <button type="button" class="btn btn-primary" id="addImages">add images</button>
            <div id="insert"></div>
        </div>
    </form>
@endsection()
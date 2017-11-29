@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">ProductDetail
            <small>Add</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <form action="{!! url('/BackEnd/productdetail/add') !!}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="col-lg-7" style="padding-bottom:120px">
            {{--hien thi thong bao loi khi ng dung nhap sai thong tin--}}
            @include('BackEnd.Display_error.error')
            {{--ket thuc thong bao loi voi ng dung nha sai thong tin--}}
            <div class="form-group">
                <label>Category Parent</label>
                <select class="form-control" name="sltParent">
                    <option value="">Please Choose Category</option>
                    <?php product_parent($data,old('sltParent'));?>
                </select>

            </div>

            <div class="form-group">
                <label>quantily</label>
                <input class="form-control" value="{!! old('quantily') !!}" name="quantily" placeholder="Please Enter quantily" />
            </div>

            <div class="form-group">
                <label>number</label>
                <input class="form-control" value="{!! old('number') !!}" type="number" name="number" placeholder="Please Enter number" />
            </div>

            <div class="form-group">
                <label>visit_number</label>
                <input class="form-control"  value="{!! old('visit_number') !!}" type="number" name="visit_number" placeholder="Please Enter visit_number" />
            </div>

            <div class="form-group">
                <label>address</label>
                <input class="form-control"  value="{!! old('address') !!}"  name="address" placeholder="Please Enter address" />
            </div>

            <div class="form-group">
                <label>Product content</label>
                <textarea class="form-control" name="contentt" rows="3">{!! old('contentt') !!}</textarea>
                <script type="text/javascript">ckeditor("contentt")</script>
            </div>

            <div class="form-group">
                <label>description</label>
                <textarea class="form-control" name="description" rows="3">{!! old('description') !!}</textarea>
                <script type="text/javascript">ckeditor("description")</script>
            </div>

            <button type="submit" class="btn btn-default">Productdetail Add</button>
        </div>

    </form>
@endsection()
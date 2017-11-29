@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Product
            <small>Edit</small>
        </h1>
    </div>
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
                    <?php  product_parent($detail, $product['id']); ?>
                </select>
            </div>

            <div class="form-group">
                <label>quantity</label>
                <input  value="{!! old('quantity', isset($product)? $product['quantity']: null) !!}" class="form-control" name="quantity"  placeholder="Please Enter quantity" />
            </div>

            <div class="form-group">
                <label>number</label>
                <input class="form-control" name="number" value="{!! old('number', isset($product)? $product['number']: null) !!}" placeholder="Please Enter number" />
            </div>

            <div class="form-group">
                <label>visit_number</label>
                <input class="form-control" name="visit_number" value="{!! old('visit_number', isset($product)? $product['visit_number']: null) !!}" placeholder="Please Enter visit_number" />
            </div>

            <div class="form-group">
                <label>address</label>
                <input class="form-control" name="address" value="{!! old('address', isset($product)? $product['address']: null) !!}" placeholder="Please Enter address" />
            </div>

            <div class="form-group">
                <label>content</label>
                <textarea class="form-control" name="contentt" rows="3">
                    {!! old('contentt', isset($product)? $product['contentt']: null) !!}
                </textarea>
                <script type="text/javascript">ckeditor("contentt")</script>
            </div>
            <div class="form-group">
                <label>description</label>
                <input class="form-control" name="description" value="{!! old('description', isset($product)? $product['description']: null) !!}" placeholder="Please Enter description" />
            </div>

            <div class="form-group">
                <label>product_id</label>
                <input class="form-control" name="product_id" value="{!! old('product_id',isset($product) ? $product['product_id'] : null) !!}"/>
            </div>

            <button type="submit" class="btn btn-default">Product Edit</button>
        </div>
    </form>
@endsection()
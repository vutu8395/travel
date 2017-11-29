@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Product
            <small>List</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>stt</th>
                <th>quantity</th>
                <th>number</th>
                <th>visit_number</th>
                <th>address</th>
                <th>contentt</th>
                <th>description</th>
                <th>product_id</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>

        @foreach($data as $list)

            <tr class="odd gradeX" align="center">
                <td>{!!  $list['id'] !!}</td>
                <td>{!! $list['quantity'] !!}</td>
                <td>{!! $list['number'] !!}</td>
                <td>{!! $list['visit_number'] !!}</td>
                <td>{!! $list['address'] !!}</td>
                <td>{!! $list['contentt'] !!}</td>
                <td>{!! $list['description'] !!}</td>
                <td>{!! $list['product_id'] !!}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('ban co muon xoa');" href=" {!! URL::route('BackEnd.productdetail.getDelete', $list['id']) !!} "> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href=" {!! URL::route('BackEnd.productdetail.getEdit', $list['id']) !!} ">Edit</a></td>
            </tr>
        @endforeach()
        </tbody>
    </table>
@endsection()
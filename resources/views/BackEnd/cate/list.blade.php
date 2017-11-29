@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Category
            <small>List</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>Name</th>
                <th>Category Parent</th>
                <th>type</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        {{--<td>{!! $key+1 !!}</td>--}}
        @foreach($list as  $item)
            <tr class="odd gradeX" align="center">
                <td>{!! $item['id'] !!}</td>
                <td>{!! $item['name'] !!}</td>
                <td>{!! $item['parentId'] !!}</td>
                <td>{!! $item['type'] !!}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('ban co muon xoa khong');" href="{!! URL::route('BackEnd.cate.getDelete', $item['id']) !!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('BackEnd.cate.getEdit', $item['id']) !!}">Edit</a></td>  </tr>
         @endforeach()
        </tbody>
    </table>
@endsection()

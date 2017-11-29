@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">User
            <small>List</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>Username</th>
                <th>email</th>
                <th>rule</th>
                <th>delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
           @foreach($users as $key => $item)
            <tr class="even gradeC" align="center">
                <td>{!! $key+1 !!}</td>
                <td>{!! $item['name'] !!}</td>
                <td>{!! $item['email'] !!}</td>
                <td>
                    @if($item["rule_id"]==1)
                        Admin
                    @elseif($item["id"]==2)
                        Superadmin
                    @else
                        member
                    @endif
                </td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('ban co muon xoa khong');" href="{!! URL::route('BackEnd.user.getDelete', $item['id']) !!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('BackEnd.user.getEdit', $item['id']) !!}">Edit</a></td>
            </tr>
            @endforeach()
        </tbody>
    </table>
@endsection()
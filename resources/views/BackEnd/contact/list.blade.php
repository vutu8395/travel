@extends('BackEnd.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Contact
            <small>List</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <?php $stt=1 ?>
        <thead>
            <tr align="center">
                <th>stt</th>
                <th>Username</th>
                <th>address</th>
                <th>phone</th>
                <th>email</th>
                <th>receive</th>
                <th>delete</th>
                <th>edit</th>
            </tr>
        </thead>
        <tbody>
           @foreach($data as $item)
            <tr class="even gradeC" align="center">
                <td>{!! $stt !!}</td>
                <td>{!! $item['name'] !!}</td>
                <td>{!! $item['address'] !!}</td>
                <td>{!! $item['phone'] !!}</td>
                <td>{!! $item['email'] !!}</td>
                <td>


                    @if($item["receive"]==1)
                        yourself
                    @else
                        dif yoursef
                    @endif


                </td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('ban co muon xoa khong');" href="{!! URL::route('BackEnd.contact.getDelete', $item['id']) !!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('BackEnd.contact.getEdit', $item['id']) !!}">Edit</a></td>
            </tr>
               <?php $stt++?>
            @endforeach()
        </tbody>
    </table>
@endsection()
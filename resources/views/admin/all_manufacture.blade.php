@extends('admin_layout')
@section('admin_content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Manufacture ID</th>
                        <th>Manufacture Name</th>
                        <th>Manufacture Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    @foreach($all_manufacture_info as $v_manufacture)
                        <tbody>
                        <tr>
                            <td>{{$v_manufacture->manufacture_id}}</td>
                            <td class="center">{{$v_manufacture->manufacture_name}}</td>
                            <td class="center">{{$v_manufacture->manufacture_description}}</td>

                            <td class="center">
                                @if($v_manufacture->publication_status==1)
                                    <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-denger">Unactive</span>
                                @endif


                            </td>
                            <td class="center">
                                @if($v_manufacture->publication_status==1)
                                    <a class="btn btn-danger" href="{{URL::to('/unactive_manufacture/'.$v_manufacture->manufacture_id)}}">
                                        <i class="fas fa-thumbs-down"></i></i>
                                    </a>
                                @else
                                    <a class="btn btn-success" href="{{URL::to('/active_manufacture/'.$v_manufacture->manufacture_id)}}">
                                        <i class="fas fa-thumbs-up"></i></i>
                                    </a>
                                @endif

                                <a class="btn btn-info" href="{{URL::to('/edit_manufacture/'.$v_manufacture->manufacture_id)}}">
                                    <i class="fas fa-edit"></i></i>
                                </a>
                                <a class="btn btn-danger" href="{{URL::to('/delete_manufacture/'.$v_manufacture->manufacture_id)}}" id="delete">
                                    <i class="fas fa-trash"></i></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection

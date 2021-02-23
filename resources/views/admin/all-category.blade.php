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
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    @foreach($all_category_info as $v_category)
                        <tbody>
                        <tr>
                            <td>{{$v_category->category_id}}</td>
                            <td class="center">{{$v_category->category_name}}</td>
                            <td class="center">{{$v_category->category_description}}</td>

                            <td class="center">
                                @if($v_category->publication_status==1)
                                    <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-denger">Unactive</span>
                                @endif


                            </td>
                            <td class="center">
                                @if($v_category->publication_status==1)
                                    <a class="btn btn-danger" href="{{URL::to('/unactive_category/'.$v_category->category_id)}}">
                                        <i class="fas fa-thumbs-down"></i></i>
                                    </a>
                                @else
                                    <a class="btn btn-success" href="{{URL::to('/active_category/'.$v_category->category_id)}}">
                                        <i class="fas fa-thumbs-up"></i></i>
                                    </a>
                                @endif

                                <a class="btn btn-info" href="{{URL::to('/edit_category/'.$v_category->category_id)}}">
                                    <i class="fas fa-edit"></i></i>
                                </a>
                                <a class="btn btn-danger" href="{{URL::to('/delete_category/'.$v_category->category_id)}}" id="delete">
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

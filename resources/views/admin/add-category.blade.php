@extends('admin_layout')
@section('admin_content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
            </div>
            <p class="alert-success">
                <?php
                $message=Session::get('message');
                if ($message){
                    echo $message;
                    Session::put('message',NULL);
                }
                ?>
            </p>
            <div class="box-content">
                <form class="form-horizontal" action="{{url('/save-category')}}" method="post">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="control-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="category_name">
                        </div>
                        <div class="form-floating">
                            <label for="exampleFormControlTextarea1" class="form-label">Category Description</label>
                            {{--<textarea class="form-control" name="category_description" rows="3"></textarea>--}}
                            <textarea class="form-control" name="category_description" style="height: 100px"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox"  name="publication_status" value="1">
                            <label class="form-check-label" for="exampleCheck1">Publication status</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>

                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection

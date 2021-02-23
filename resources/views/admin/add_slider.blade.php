@extends('admin_layout')
@section('admin_content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider</h2>
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
                <form class="form-horizontal" action="{{url('/save-slider')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Slider Image</label>
                            <div class="controls">
                                <input class="input-file uniform_on" name="slider_image" id="fileInput" type="file" required="">
                            </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox"  name="publication_status" value="1" required="">
                            <label class="form-check-label" for="exampleCheck1">Publication status</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Slider</button>

                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection

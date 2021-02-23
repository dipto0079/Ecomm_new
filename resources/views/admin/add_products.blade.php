@extends('admin_layout')
@section('admin_content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Products</h2>
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
                <form class="form-horizontal" action="{{url('/save-product')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="control-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Products Name</label>
                            <input type="text" class="form-control" name="products_name" required="">
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="selectError3">Products category</label>
                            <div class="controls">
                                <select id="selectError3" name="category_id">
                                    <option>Select Category</option>
                                    <?php
                                    $all_published_category=DB::table('tbl_category')
                                        ->where('publication_status',1)
                                        ->get();
                                    foreach ($all_published_category as $v_category){?>
                                    <option value="{{$v_category->category_id}}">{{$v_category->category_name}}</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="selectError3">Manufacture Name</label>
                            <div class="controls">
                                <select id="selectError3" name="manufacture_id">
                                    <option>Select Manufacture</option>
                                    <?php
                                    $all_published_manufacture=DB::table('manufacture')
                                        ->where('publication_status',1)
                                        ->get();
                                    foreach ($all_published_manufacture as $v_manufacture){?>
                                    <option value="{{$v_manufacture->manufacture_id}}">{{$v_manufacture->manufacture_name}}</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-floating">
                            <label for="exampleFormControlTextarea1" class="form-label">Products Short Description</label>
                            {{--<textarea class="form-control" name="category_description" rows="3"></textarea>--}}
                            <textarea class="form-control" name="product_short_description" style="height: 100px"></textarea>
                        </div>

                        <div class="form-floating">
                            <label for="exampleFormControlTextarea1" class="form-label">Products Long Description</label>
                            {{--<textarea class="form-control" name="category_description" rows="3"></textarea>--}}
                            <textarea class="form-control" name="product_long_description" style="height: 100px"></textarea>
                        </div>

                        <div class="control-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Products Price</label>
                            <input type="text" class="form-control" name="product_price" required="">
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Image</label>
                            <div class="controls">
                                <input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Products Size</label>
                            <input type="text" class="form-control" name="product_size">
                        </div>
                        <div class="control-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Products Color</label>
                            <input type="text" class="form-control" name="product_color" >
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox"  name="publication_status" value="1">
                            <label class="form-check-label" for="exampleCheck1">Publication status</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Products</button>

                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection

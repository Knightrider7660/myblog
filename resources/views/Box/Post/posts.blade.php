@section('box')
    <!-- Basic modal -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-file-plus"></i> Create Post</h5>
                </div>

                <form action="{{action('Admin\Post\PostController@save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="input-group">
                            <span class="input-group-addon">Category </span>
                            <select class="form-control m-input" name="categoryID" >
                                <option value="">Select a Category</option>
                                @foreach($category as $row)
                                    <option value="{{$row->categoryID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Title:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="title" placeholder="Post Title" type="text" required>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Post:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="post" placeholder="Post Description..."></textarea>
                            </div>
                        </div><br>
                        <div class="form-group mb-10">
                            <label class="col-lg-3 control-label">Select Image:</label>
                            <div class="col-lg-9">
                                <input class="form-control file_upload" type="file" name="imageName" accept="image/*" placeholder="Photo">                            </div>
                        </div><br>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i> Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /basic modal -->

    <!-- Basic Edi modal -->
    <div id="ediModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-pencil7"></i> Edit Project</h5>
                </div>

                <form action="{{action('Admin\Post\PostController@edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" id="ediID" name="id">

                    <div class="modal-body">
                        <div class="input-group">
                            <span class="input-group-addon">Category </span>
                            <select class="form-control m-input" name="categoryID" >
                                <option value="">Select a Category</option>
                                @foreach($category as $row)
                                    <option value="{{$row->categoryID}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Title:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="title" placeholder="Post Title" type="text" required>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Post:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="post" placeholder="Post Description..."></textarea>
                            </div>
                        </div><br>
                        <div class="form-group mb-10">
                            <label class="col-lg-3 control-label">Select Image:</label>
                            <div class="col-lg-9">
                                <input class="form-control file_upload" type="file" name="imageName" accept="image/*" placeholder="Photo">                            </div>
                        </div><br>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                            <button type="submit" class="btn btn-primary"><i class="icon-checkmark4"></i> Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /basic Edi modal -->
@endsection
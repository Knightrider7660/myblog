@extends('layouts.admin.master')
@extends('box.Post.posts')
@section('title')
    Post
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <p><button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#myModal"><b><i class="icon-file-plus"></i></b> Create Post</button></p>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Posts</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>

                        <tr>
                            <th>S/N</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Post</th>
                            <th class="text-right">Action</th>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td>{{$row->postID}}</td>
                                <td class="text-center"><img src="{{asset('public/uploads/'.$row->imageName)}}" alt="Image Not Show Properly" style="height: 50px; width: 50px;"/></td>
                                <td>{{$row->postCategory['name']}}</td>
                                <td>{{$row->title}}</td>
                                <td>{{$row->post}}</td>
                                <td class="text-right">
                                    <button class="btn btn-xs btn-success no-padding mr-5 ediBtn" data-title="{{$row->title}}" data-cat="{{$row->categoryID}}" data-post="{{$row->post}}" data-id="{{$row->postID}}"  data-toggle="modal" data-target="#ediModal" title="Edit"><i class="icon-pencil5"></i></button>
                                    <a class="btn btn-xs btn-danger no-padding" href="{{action('Admin\Post\PostController@del', ['id' => $row->postID])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"><i class="icon-bin"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script src="{{asset('public/js/jquery.geocomplete.min.js')}}" type="text/javascript"></script>

    <script type="text/javascript">

        $(function () {

            $('.datatable').DataTable({
                order: [[ 0, "desc" ]],
                columnDefs: [
                    { orderable: false, "targets": [2] }//For Column Order
                ]
            });
        });

        $(function () {
            $('.ediBtn').click(function () {
                var id = $(this).data('id');
                var title = $(this).data('title');
                var post = $(this).data('post');
                var cat = $(this).data('cat');


                $('#ediID').val(id);
                $('#ediModal [name=title]').val(title);
                $('#ediModal [name=post]').val(post);
                $('#ediModal [name=categoryID]').val(cat);

            });
        });



    </script>

@endsection
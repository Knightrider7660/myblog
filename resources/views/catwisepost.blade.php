@extends('layouts.master')
@section('title')
    {{session('categoryName')}}
@endsection
@section('content')
    <section class="site-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h2 class="mb-4">Category: {{session('categoryName')}}</h2>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row mb-5 mt-5">

                        <div class="col-md-12">

                            @foreach($post as $row)
                            <div class="post-entry-horzontal">
                                    <a class="mb-15" href="#">
                                        <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{asset('public/uploads/'.$row->imageName)}});"></div>
                                        <span class="text">
                                              <div class="post-meta">
                                                <span class="category">{{$row->postCategory['name']}}</span>
                                                <span class="mr-2">{{$row->created_at->format('F j, Y')}} </span> &bullet;
                                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                              </div>
                                              <h2>{{str_limit($row->post, 100, '...')}}</h2>
                                        </span>
                                    </a>
                            </div>
                        @endforeach
                            <!-- END post -->

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <nav aria-label="Page navigation" class="text-center">
                                <ul class="pagination">
                                    <li class="page-item  active"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>



                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <div class="bio text-center">
                            <img src="{{asset('public/assets/images/author.jpg')}}" alt="Image Placeholder" class="img-fluid">
                            <div class="bio-body">
                                <h2>Sukanta Purkayastha</h2>
                                <p>Junior Software Developer <br/> Infinity Flame Soft <br/> 317-320, Rangmohol Tower, Bondorbazar, Sylhet, Bangladesh</p>
                                <p><a href="{{action('AuthorProfileController@index')}}" class="btn btn-primary btn-sm">Read my bio</a></p>
                                <p class="social">
                                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            @foreach($postcat as $row)
                                <li><a href="{{action('User\CategorySessionController@index', ['id' => $row->categoryID])}}">{{$row->name}} <span>({{$row->countPost($row->categoryID)}})</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                                <ul>
                                    @foreach($table as $row)
                                        <li>
                                            <a href="">
                                                <img src="{{asset('public/uploads/'.$row->imageName)}}" alt="Image placeholder" class="mr-4">
                                                <div class="text">
                                                    <h4>{{$row->title}}</h4>
                                                    <div class="post-meta">
                                                        <span class="mr-2">{{$row->created_at->format('F j, Y')}} </span> &bullet;
                                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                    <li class="more_post"><a href="" class="text-center">More Post</a></li>
                                </ul>
                        </div>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Tags</h3>
                        <ul class="tags">
                            @foreach($postcat as $row)
                                <li><a href="#">{{$row->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- END sidebar -->
            </div>
        </div>
    </section>

@endsection


<!--  format('F j, Y') -->
@extends('layouts.master')
@section('title')
    Home
@endsection

@section('content')
    <section class="site-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel owl-theme home-slider">
                        <div>
                            <a href="#" class="a-block d-flex align-items-center height-lg" style="background-image: url({{asset('public/assets/images/img_1.jpg')}}); ">
                                <div class="text half-to-full">
                                    <div class="post-meta">
                                        <span class="category">Lifestyle</span>
                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                    </div>
                                    <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="a-block d-flex align-items-center height-lg" style="background-image: url({{asset('public/assets/images/img_2.jpg')}}); ">
                                <div class="text half-to-full">
                                    <div class="post-meta">
                                        <span class="category">Lifestyle</span>
                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                    </div>
                                    <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="a-block d-flex align-items-center height-lg" style="background-image: url({{asset('public/assets/images/img_3.jpg')}}); ">
                                <div class="text half-to-full">
                                    <div class="post-meta">
                                        <span class="category">Lifestyle</span>
                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                    </div>
                                    <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="a-block d-flex align-items-center height-md" style="background-image: url({{asset('public/assets/images/img_2.jpg')}}); ">
                        <div class="text">
                            <div class="post-meta">
                                <span class="category">Lifestyle</span>
                                <span class="mr-2">March 15, 2018 </span> &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                            <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="a-block d-flex align-items-center height-md" style="background-image: url({{asset('public/assets/images/img_3.jpg')}}); ">
                        <div class="text">
                            <div class="post-meta">
                                <span class="category">Travel</span>
                                <span class="mr-2">March 15, 2018 </span> &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                            <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="a-block d-flex align-items-center height-md" style="background-image: url({{asset('public/assets/images/images/img_4.jpg')}}); ">
                        <div class="text">
                            <div class="post-meta">
                                <span class="category">Food</span>
                                <span class="mr-2">March 15, 2018 </span> &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                            <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>


    </section>
    <!-- END section -->

      <section class="site-section py-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Lifestyle Category</h2>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row">
                        @foreach($post as $row)
                        <div class="col-md-6">
                            <a href="#" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                <img src="{{asset('public/uploads/'.$row->imageName)}}" alt="Image placeholder">
                                <div class="blog-content-body">
                                    <div class="post-meta">
                                        <span class="category">{{$row->postCategory['name']}}</span>
                                        <span class="mr-2">{{$row->created_at->format('F j, Y')}} </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                    </div>
                                    <h1>{{$row->title}}</h1>
                                    <h2>{{str_limit($row->post, 20, '...')}}</h2>
                                </div>
                            </a>
                        </div>
                            @endforeach
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


                    <div class="row mb-5 mt-5">

                        <div class="col-md-12">
                            <h2 class="mb-4">More Blog Posts</h2>
                        </div>

                        <div class="col-md-12">

                            <div class="post-entry-horzontal">
                                <a href="#">
                                    <div class="image element-animate"  data-animate-effect="fadeIn" style="background-image: url({{asset('public/assets/images/img_10.jpg')}});"></div>
                                    <span class="text">
                      <div class="post-meta">
                        <span class="category">Travel</span>
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                    </span>
                                </a>
                            </div>
                            <!-- END post -->

                            <div class="post-entry-horzontal">
                                <a href="#">
                                    <div class="image element-animate"  data-animate-effect="fadeIn" style="background-image: url({{asset('public/assets/images/img_12.jpg')}});"></div>
                                    <span class="text">
                      <div class="post-meta">
                        <span class="category">Lifestyle</span>
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                    </span>
                                </a>
                            </div>
                            <!-- END post -->

                            <div class="post-entry-horzontal">
                                <a href="#">
                                    <div class="image element-animate"  data-animate-effect="fadeIn" style="background-image: url({{asset('public/assets/images/img_12.jpg')}});"></div>
                                    <span class="text">
                      <div class="post-meta">
                        <span class="category">Food</span>
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                    </span>
                                </a>
                            </div>
                            <!-- END post -->

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

                    <div class="sidebar-box main">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            @foreach($postcat as $row)
                            <li><a href="{{action('User\CategorySessionController@index', ['id' => $row->categoryID])}}">{{$row->name}} <span>({{$row->countPost($row->categoryID)}})</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- END sidebar-box -->
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
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                @foreach($postside as $row)
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

                    <div class="sidebar-box">
                        <h3 class="heading">Tags</h3>
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END sidebar -->

            </div>
        </div>

    </section>

@endsection


<!--  format('F j, Y') -->
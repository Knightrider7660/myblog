@extends('layouts.master')
@section('title')
    Author Profile
@endsection
@section('content')
    <section class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section_title mb-100">
                        <h2>Who I Am</h2>
                    </div>
                </div>
            </div>
            <div class="about_main">
                <div class="row">
                        <div class="col-md-4">
                            <div class="about_left about_single_box">
                                <h3>history</h3>
                                <p>document without relying on meaningful content (also called greeking). Replacing the actual content with placeholder text allows designers to design the form of the content before the content itself has been produced.
                                    document without relying on meaningful content (also called greeking). Replacing the actual content with placeholder text allows designers to design.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about_img about_single_box">
                                <img src="{{asset('public/assets/images/author.jpg')}}" alt="No Image" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about_right about_single_box">
                                <div class="about_right_top mb-50">
                                    <h4>personal data</h4>
                                    <ul>
                                        <li>date of birth :<span>30/10/1995</span></li>
                                        <li>phone :<span>+880 1719894414</span></li>
                                        <li>email :<span>spurkayastha83@gmail.com</span></li>
                                    </ul>
                                </div>
                                <div class="about_right_down ">
                                    <h4>education</h4>
                                    <ul>
                                        <li>B.sc In CSE, Leading University, Sylhet</li>
                                        <li>sylhet govt. college, sylhet</li>
                                        <li>web development, Infinity Flame soft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start What do -->
    <section class="what_do" style="background-image: url({{asset('public/assets/images/maxresdefault.jpg')}}">
        <div class="container">
            <div class="do_list">
                <div class="row">
                    <div class="col-md-4">
                        <div class="about_img about_single_box main_do">
                            <img src="{{asset('public/assets/images/web1.jpg')}}" alt="No Image" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about_left about_single_box main_do">
                            <h3 class="text-center">what i do</h3>
                            <p>document without relying on meaningful content (also called greeking). Replacing the actual content with placeholder text allows designers to design the form of the content before the content itself has been produced.
                                document without relying on meaningful content (also called greeking). Replacing the actual content with placeholder text allows designers to design.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about_img about_single_box main_do">
                            <img src="{{asset('public/assets/images/Create.jpg')}}" alt="No Image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End What do -->
@endsection


<!--  format('F j, Y') -->
<div class="sidebar sidebar-main sidebar-fixed">
    <div class="sidebar-content">
        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->

                    <li class="active"><a href="{{action('Admin\MainControler@index')}}"><i class="icon-home4"></i> <span>Blog Admin</span></a></li>

                    <li class="navigation-divider"></li>

                    <li class="navigation-divider"></li>

                    <li class="{{ (Request::is('posts/*', 'posts') ? 'active' : '') }}"><a href="#"><i class="icon-arrow-right16"></i> <span>User Posts</span></a>
                        <ul>
                            <li class="{{ (Request::is('postcat/list') ? 'active' : '') }}"><a href="{{action('Admin\Post\PostCategoryController@index')}}"><i class="icon-arrow-right13"></i> Post Category</a></li>
                            <li class="{{ (Request::is('post/list') ? 'active' : '') }}"><a href="{{action('Admin\Post\PostController@index')}}"><i class="icon-arrow-right13"></i> User Post</a></li>
                        </ul>
                    </li>

                    <li><a href="#"><i class="icon-users"></i> <span>All Users</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /main navigation -->
    </div>
</div>
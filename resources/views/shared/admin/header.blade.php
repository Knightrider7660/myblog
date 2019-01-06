<div class="navbar navbar-default navbar-fixed-top header-highlight">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="{{asset('public/assetadmin/images/logo_light.png')}}" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

        </ul>


        <ul class="nav navbar-nav navbar-right">
            <li><a href="" title="Refresh this page"><i class="icon-spinner4 spinner"></i></a></li>
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-user-tie"></i>
                    <span>{{ isset(Auth::user()->name) ? Auth::user()->name : 'User name' }}</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> {{ isset(Auth::user()->name) ? Auth::user()->name : 'User name' }}</a></li>
                    <li><a href="#"><i class="icon-paperplane"></i> {{ isset(Auth::user()->email) ? Auth::user()->email : 'User email' }}</a></li>
                    <li><a href="#"><i class="icon-fan"></i> {{ isset(Auth::user()->userType) ? Auth::user()->userType : 'User Type' }}</a></li>
                    <li class="divider"></li>
                    <!--<li><a href="#"><i class="icon-fan"></i> Account settings</a></li>-->
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="icon-switch2"></i> Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
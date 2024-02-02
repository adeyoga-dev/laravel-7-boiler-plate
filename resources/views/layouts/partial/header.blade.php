<div class="header-area">
    <div class="row align-items-center">
        <div class="col-md-6 clearfix mt-2 mb-2">
            @if ($navbar_mode != 1)
                <div class="nav-btn pull-left mr-3">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            @endif
            <div class="breadcrumbs-area">
                <h4 class="page-title pull-left">@yield('title')</h4>
            </div>
        </div>
        <div class="col-md-6 clearfix">
            <div class="user-profile pull-right">
                @if ($navbar_mode != 1)
                    @guest
                    <h4 class="user-name"><a style="color: white" href="{{route('login')}}"><i class="fa fa-user"></i>&nbsp; Login</a></h4>
                    @else
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i>&nbsp;{{Auth::user()->name}}<i class="fa fa-angle-down"></i></h4>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(45px, 45px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="#">
                                Profile
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endguest
                @else
                    @if($page == 1)
                        <h4 class="user-name" ><a style="color: white" href="{{route('login')}}"><i class="fa-solid fa-gauge-high fa-lg"></i>&nbsp; Login</a></h4>
                    @else
                        <h4 class="user-name" ><a style="color: white" href="{{route('register')}}"><i class="fa-solid fa-gauge-high fa-lg"></i>&nbsp; Register</a></h4>
                    @endif
                @endif
            </div>

        </div>

    </div>
</div>

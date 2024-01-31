<!-- sidebar menu area start -->
@if ($navbar_mode != '1')
<div class="sidebar-menu">
    {{-- Untuk gambar logo --}}
    {{-- <div class="sidebar-header header-login-bg mt-2" style="border-bottom: px solid white"> --}}
    <div class="sidebar-header mt-2" style="border-bottom: px solid white; background: #084169">
        <div class="logo">
            <h4 class="text-white">Logo</h4>
        </div>
    </div>
    <div class="main-menu">
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 505px;"><div class="menu-inner" style="overflow: hidden; width: auto; height: 505px;">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="@if ($page == 3 || $page == 4) active @endif">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa-solid fa-gauge-high fa-lg" style="color: #fff;"></i><span class="text-white"> Menu 1</span></a>
                        <ul class="collapse">
                            <li class="navbar-line @if ($page == 3) active @endif"><a href="#" aria-expanded="false"> <span class="text-white">choose 1 @if ($page == 3) <i class="fa-solid fa-play fa-xs" style="color: #ffffff;"></i> @endif</span></a></li>
                            <li class="navbar-line @if ($page == 4) active @endif"><a href="#" aria-expanded="false"> <span class="text-white">choose 2 @if ($page == 4) <i class="fa-solid fa-play fa-xs" style="color: #ffffff;"></i> @endif</span></a></li>
                        </ul>
                    </li>
                    <li class="@if ($page == 5 || $page == 6) active @endif">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa-solid fa-newspaper fa-lg" style="color: #fff;"></i><span class="text-white"> Menu 2</span></a>
                        <ul class="collapse">
                            <li class="navbar-line @if ($page == 5) active @endif"><a href="#" aria-expanded="false"> <span class="text-white">choose 1 @if ($page == 5) <i class="fa-solid fa-play fa-xs" style="color: #ffffff;"></i> @endif</span></a></li>
                            <li class="navbar-line @if ($page == 6) active @endif"><a href="#" aria-expanded="false"> <span class="text-white">choose 2 @if ($page == 6) <i class="fa-solid fa-play fa-xs" style="color: #ffffff;"></i> @endif</span></a></li>
                        </ul>
                    </li>
                    <li  @if ($page == 5) class="active" @endif><a href="#" aria-expanded="false"><i class="fa-regular fa-file-lines fa-lg" style="color: #fff;"></i> <span class="text-white">Menu 3 @if ($page == 5) @endif</span></a></li>
                    <li class="fixed-bottom pb-3 pl-3"><span style="font-size: 24px" class="text-white font-weight-bold" id="clock"></span></li>
                </ul>
            </nav>
        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 64px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 505px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
    </div>
</div>
@endif

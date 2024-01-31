<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="">
    <head>
        {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/icon/favicon.png')}}">
        {{-- font awesome --}}
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/brands.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/solid.min.css')}}">
        {{-- fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- others css --}}
        <link rel="stylesheet" href="{{asset('assets/css/typography.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/default-css.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/metisMenu.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">
        {{-- modernizr css --}}
        <script src="{{asset('assets/vendor/modernizr/modernizr-2.8.3.min.js')}}"></script>
        {{-- jquery --}}
        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        {{--promptjs--}}
        <link rel="stylesheet" href="{{asset('assets/vendor/promptjs/prompt.css')}}">
        <script src="{{asset('assets/vendor/promptjs/prompt.js')}}"></script>
        {{--my javascript--}}
        <script src="{{asset('assets/js/myjavascript.js')}}"></script>
        {{-- select2 --}}
        <link rel="stylesheet" href="{{asset('assets/vendor/select2/select2-bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.min.css')}}">
        <script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>

        <style>
            .login-bg{
                background:url({{asset('assets/images/bg/singin-bg.png')}}) center/cover no-repeat;
            }

            .header-login-bg{
                background:url({{asset('assets/images/bg/header-singin-bg.png')}}) center/cover no-repeat;
            }

            .header-text-bg{
                background:url({{asset('assets/images/bg/header-text.png')}}) center/cover no-repeat;
            }

            .banner-login-bg{
                background:url({{asset('assets/images/bg/banner-login.png')}}) center/cover no-repeat;
            }

            .modal-header-color{
                background: #084169;
                color: white;
                border-top-left-radius:3px;
                border-top-right-radius:3px
            }
        </style>
        {{-- Custom style --}}
        @stack('style')

    </head>
    <body>

        {{-- loader --}}
        @include('layouts.partial.loader')
        {{-- page container --}}
        <div class="page-container @if ($navbar_mode == 1) sbar_collapsed @endif">
            {{-- sidebar --}}
            @include('layouts.partial.sidebar')
            {{-- main content --}}
            <div class="main-content" style="min-height: 350px;">
                {{-- header --}}
                @include('layouts.partial.header')
                {{-- content --}}
                <div class="@if ($navbar_mode !== 1) main-content-inner pr-4 pl-4 pb-4 @endif">
                    @yield('content')
                </div>
            </div>
            {{-- footer --}}
            @include('layouts.partial.footer')
        </div>

        {{-- bootstrap 4 js --}}
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>

        {{-- others plugins --}}
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <script>
            let token   = $("meta[name='csrf-token']").attr("content");
            let alertPrompt = loadPrompt();
        </script>
        {{-- Custom script --}}
        @stack('script')
    </body>
</html>

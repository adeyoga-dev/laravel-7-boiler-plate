@extends('layouts.master')
@section('title', 'Login')

@php
$navbar_mode = 1;
$page = "1";
@endphp

@section('content')
<div class="login-area login-bg">
    <div class="container">
        <div class="login-box ptb--100" style="margin-top: 0">
            <form method="post" action="{{ route('login') }}">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-4">
                        @csrf
                        <div class="login-form-head header-text-bg">
                            <p class="mt-5 mb-md-5"></p>
                            <h4 class="mb-5"><h4>
                        </div>
                        @error('username')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                        <div class="login-form-body">
                            <label for="username">Username</label>
                            <div class="form-gp">
                                <input id="username" type="text" @error('username') style="border-color:red;" @enderror name="username" value="{{ old('username') }}" required placeholder="Masukkan username..." autofocus autocomplete="username">
                                <i class="fa-solid fa-user fa-lg" style="color: #084169">&nbsp; </i>
                            </div>
                            <label for="password">Password</label>
                            <div class="form-gp">
                                <input id="password" type="password" @error('password') style="border-color:red;" @enderror name="password" required placeholder="Masukkan password...">
                                <i class="fa-solid fa-lock fa-lg" style="color: #084169">&nbsp; </i>
                            </div>
                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit"><i class="fa-solid fa-right-to-bracket fa-lg" style="color: #084169">&nbsp; </i> Masuk <i class="ti-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-8 d-none d-xl-block d-ls-block d-md-block d-sm-none">
                        <img src="{{asset('assets/images/bg/banner-login.png')}}" class="img-fluid" style="margin-left: auto" alt="">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

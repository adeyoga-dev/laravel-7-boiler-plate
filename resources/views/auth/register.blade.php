@extends('layouts.master')
@section('title', 'Register')

@php
    $navbar_mode = 1;
    $page = '1';
@endphp

@section('content')
    <div class="login-area login-bg">
        <div class="container">
            <div class="login-box ptb--100" style="margin-top: 0">
                <form method="post" action="{{ route('register') }}">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-4">
                            @csrf
                            <div class="login-form-head">
                                <h4 class="mb-1" style="color: #27272a">Register<h4>
                                <h6 class="mb-1" style="color: #27272a">Join With Us!<h6>
                            </div>
                            <div class="login-form-body">
                                @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                @error('username')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                @error('email')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                @error('password')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <label for="name">Name</label>
                                <div class="form-gp">
                                    <input id="name" type="text" @error('name') style="border-color:red;" @enderror name="name" value="{{ old('name') }}" required placeholder="Masukkan nama..." autofocus autocomplete="name">
                                    <i class="fa-solid fa-user fa-lg" style="color: #084169">&nbsp; </i>
                                </div>
                                <label for="username">Username</label>
                                <div class="form-gp">
                                    <input id="username" type="text" @error('username') style="border-color:red;" @enderror name="username" value="{{ old('username') }}" required placeholder="Masukkan username..." autocomplete="username">
                                    <i class="fa-solid fa-user fa-lg" style="color: #084169">&nbsp; </i>
                                </div>
                                <label for="email">Email</label>
                                <div class="form-gp">
                                    <input id="email" type="email" @error('email') style="border-color:red;" @enderror
                                        name="email" value="{{ old('email') }}" required placeholder="Masukkan email..." autocomplete="email">
                                    <i class="fa-solid fa-user fa-lg" style="color: #084169">&nbsp; </i>
                                </div>
                                <label for="password">Password</label>
                                <div class="form-gp">
                                    <input id="password" type="password"
                                        @error('password') style="border-color:red;" @enderror name="password" required placeholder="Masukkan password..." autocomplete="password">
                                    <i class="fa-solid fa-user fa-lg" style="color: #084169">&nbsp; </i>
                                </div>
                                <label for="password-confirm">Confirm Password</label>
                                <div class="form-gp">
                                    <input id="password-confirm" type="password" name="password_confirmation" required placeholder="Masukkan konfirmasi password..." autocomplete="new-password">
                                    <i class="fa-solid fa-user fa-lg" style="color: #084169">&nbsp; </i>
                                </div>
                                <div class="submit-btn-area">
                                    <button id="form_submit" type="submit"><i class="fa-solid fa-right-to-bracket fa-lg" style="color: #084169">&nbsp; </i> Masuk <i class="ti-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-8 d-none d-xl-block d-ls-block d-md-block d-sm-none">
                            <img src="{{ asset('assets/images/bg/banner-register.png') }}" class="img-fluid" style="margin-left: auto" alt="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.master')
@section('title', 'Blank Page')
@php
$navbar_mode = 0;
$page = "3";
@endphp

@push('style')

@endpush

@section('content')
<div class="card2  mt-4" style="background: #084169;">
    <div class="card-body py-2">
        <div class="form-row align-items-center">
            <div class="col-xl-12">
                <h4 class="header-title mb-1 mt-1 text-white">Blank Page</h4>
            </div>
        </div>
    </div>
</div>
<div class="card ">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{ __('You are logged in!') }}
    </div>
</div>
@endsection

@push('script')

@endpush

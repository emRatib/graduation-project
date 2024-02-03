@extends('Dashboard/layouts/master')

@section('title')
    empty
@endsection

@section('page-url')
    <h5 class="pt-1">Dashboard / <span class="active"> empty </span></h5>
@endsection


@push('css')
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/custom-style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/custom-style-settings.css') }}" />
@endpush

@section('page-header')
    <div class="header">
        <div class="layer1"></div>
        <div class="layer2">
        </div>
    </div>
@endsection

@section('content')
    <div class="mx-5 my-3">
        <div class="card p-2" style="margin-top: -70px">
            <!-- write your content here -->
            <h1>Empty</h1>
        </div>
    </div>
@endsection

@push('js')
   
@endpush

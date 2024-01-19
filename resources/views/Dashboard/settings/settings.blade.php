@extends('Dashboard/layouts/master')

@section('title')
    settings
@endsection

@section('css')
    <link rel="stylesheet" href="{{URL::asset('Dashboard/css/custom-style-settings.css')}}" />
@endsection

@section('page-url')
    <h5 class="pt-1">Dashboard / Settings / <span class="active"> settings </span></h5>
@endsection

@section('page-header')
    <div class="header">
        <div class="layer1"></div>
        <div class="layer2"></div>
    </div>
@endsection

@section('content')
<div class="p-0">
    <div class="container-fluid p-3" style="margin-top: -70px;">
        <div class="card">
            <div class="p-2">
                <div class="row col-md-12" id="row">
                    <div class="col-md-6">
                        <input type="text" class="main-input" placeholder="Enter Website Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="main-input" placeholder="Select Main Logo">
                    </div>
                </div>

                <div class="m-3">
                    <textarea class="main-textarea" id="textAreaExample2"></textarea>
                </div>

                <div class="row col-md-12" id="row">
                    <div class="col-md-6">
                        <input type="text" class="main-input" placeholder="Enter Email">
                        <input type="text" class="main-input" placeholder="Enter instagram">
                        <input type="text" class="main-input" placeholder="Enter Messager">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="main-input" placeholder="Enter facebook">
                        <input type="text" class="main-input" placeholder="Enter Youtube">
                        <input type="text" class="main-input" placeholder="Enter Twitter">
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary btn-rounded btn-lg main-button">Save</button>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <!-- chart file -->
    <script src="{{url('Dashboard/js/chart.js')}}"></script>
    <!-- frost chart file -->
    <script src="{{url('Dashboard/js/frost_chart.js')}}"></script>
@endsection

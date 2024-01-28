@extends('Dashboard/layouts/master')

@section('title')
	dashboard doctor home
@endsection

@section('css')
    <link rel="stylesheet" href="{{URL::asset('Dashboard/css/custom-style.css')}}" />
@endsection

@section('page-url')
    <h6 class="pt-1">Dashboard / Doctor / <span class="active"> Home </span></h6>
@endsection

@section('page-header')
    <div class="header">
        <div class="layer1"></div>
        <div class="layer2">
        <div class="container-fluid d-flex align-items-center justify-content-center">
            <div class="row col-md-12" style="background-color:rgba(137, 43, 226, 0);margin-top: -100px;">
            <div class="col-md-4 p-5">
                <div class="card p-3 d-flex">
                <div class="d-flex align-items-center justify-content-around">
                    <div class="card d-flex align-items-center justify-content-center p-4" style="margin-top: -50px;">
                    <i class="fa-solid fa-user" style="color:#3B71CA;font-size: 35px;"></i>
                    </div>
                    <div style="color: #3B71CA;line-height: 10px;">
                    <p>Today user</p>
                    <span>12,333</span>
                    </div>
                </div>
                <hr>
                50%
                </div>
            </div>
            <div class="col-md-4 p-5">
                <div class="card p-3 d-flex">
                <div class="d-flex align-items-center justify-content-around">
                    <div class="card d-flex align-items-center justify-content-center p-4" style="margin-top: -50px;">
                    <i class="fa-solid fa-chart-column" style="color:#3B71CA;font-size: 35px;"></i>
                    </div>
                    <div style="color: #3B71CA;line-height: 10px;">
                    <p>Bounc Rat</p>
                    <span>132</span>
                    </div>
                </div>
                <hr>
                50%
                </div>
            </div>
            <div class="col-md-4 p-5">
                <div class="card p-3 d-flex">
                <div class="d-flex align-items-center justify-content-around">
                    <div class="card d-flex align-items-center justify-content-center p-4" style="margin-top: -50px;">
                    <i class="fa-solid fa-universal-access" style="color:#3B71CA;font-size: 35px;"></i>
                    </div>
                    <div style="color: #3B71CA;line-height: 10px;">
                    <p>Uniqe users</p>
                    <span>1332</span>
                    </div>
                </div>
                <hr>
                50%
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="p-3">
        <div class="container-fluid d-flex align-items-center justify-content-center charts-holder">
            <div class="row col-md-12" style="background-color: rgba(0, 0, 255, 0);">
            <div class="col-md-6 col-sm-6">
                <div class="card p-3 mb-1">
                <div id="chart"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="card p-3">
                <div id="frost-chart"></div>
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


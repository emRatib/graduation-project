@extends('Website/layouts/master')

@section('title')
    get start
@endsection

@push('css')
    {{-- <link rel="stylesheet" href="{{URL::asset('Website/css/custom-style.css')}}" /> --}}
@endpush

@section('sub-header')
    <header>
        <div class="header-area">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="social_media_links">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i> info@docmed.com</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-phone"></i> 160160</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <h5><a href="../index.html">Website</a> / <a href="./index.html">Getstart</a></h5>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="#index.html">home</a></li>
                                        <li><a href="#Doctors.html">More Info</a></li>
                                        <li><a href="#about.html">Policy</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3  d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn  d-lg-block">

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="card px-3 mt-5 mb-5 p-3" style="max-width: 1000px;margin: auto;">
        <form>
            <!-- example 3 -->
            <div class="">
                <h4 class="mb-3 text-center">Entre Data</h4>
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-6">
                        <!-- Material input -->
                        <div class="align-items-center">
                            <div class="form-outline col-auto">
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2" />
                                <label class="form-label" for="formTextExample2">gender</label>
                            </div>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-6">
                        <div class="align-items-center">
                            <div class="form-outline col-auto">
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2" />
                                <label class="form-label" for="formTextExample2">age</label>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-4">
                        <div class="align-items-center">
                            <div class="form-outline col-auto">
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2" />
                                <label class="form-label" for="formTextExample2">hypertension</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="align-items-center">
                            <div class="form-outline col-auto">
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2" />
                                <label class="form-label" for="formTextExample2">blood_glucose_level</label>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-6">
                        <div class="align-items-center">
                            <div class="form-outline col-auto">
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2" />
                                <label class="form-label" for="formTextExample2">heart_disease</label>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->
                    <div class="col-6">
                        <div class="align-items-center">
                            <div class="form-outline col-auto">
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2" />
                                <label class="form-label" for="formTextExample2">smoking_history</label>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>

                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-5">
                        <div class="align-items-center">
                            <div class="form-outline col-auto">
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2" />
                                <label class="form-label" for="formTextExample2">bmi</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="align-items-center">
                            <div class="form-outline col-auto">
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2" />
                                <label class="form-label" for="formTextExample2">HbA1c_level</label>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <div class="d-flex justify-content-center mt-3">
                    <button type="button" class="btn btn-primary btn-rounded px-5" data-mdb-ripple-init>Start Now</button>
                </div>
            </div>
            <!-- example 3 -->
        </form>
    </div>
@endsection

@push('js')
    {{-- <script src="{{url('Dashboard/js/chart.js')}}"></script> --}}
@endpush

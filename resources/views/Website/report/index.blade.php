@extends('Website/layouts/master')

@section('title')
    Paitent Reports
@endsection

@push('css')
    <script src="https://cdn.jsdelivr.net/npm/frappe-charts@1.2.4/dist/frappe-charts.min.iife.js"></script>
    {{-- {{url('Website/img/chat.png')}} --}}
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
                                <h5>
                                    <a href="./index.html">Website</a> /
                                    <a href="./index.html">Reports</a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">Charts</a></li>
                                        <li><a href="reports.html">Reports</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-lg-block"></div>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" height="320"
                            width="100%" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
                        <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <!-- chart -->
                <div class="card mt-10">
                    <div id="chart"></div>
                </div>
                <!-- reports and progress -->
                <div class="mt-3 card p-3">
                    <p>the progressing of treatment</p>
                    <div class="progress mt-2" style="height: 20px;">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <div class="progress mt-2" style="height: 20px;">
                        <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55"
                            aria-valuemin="0" aria-valuemax="100">55%</div>
                    </div>
                    <div class="progress mt-2" style="height: 20px;">
                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3">
            <div class="row gx-lg-5">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <!-- News block -->
                    <div class="card">
                        <div id="frost-chart"></div>
                    </div>
                    <!-- News block -->
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <!-- News block -->
                    <div class="card">
                        <div>
                            <canvas id="myChart" height="270px"></canvas>
                        </div>
                        <p class="text-muted mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>
                    </div>
                    <!-- News block -->
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <!-- News block -->
                    <div class="card">
                        <canvas id="myChart2"> </canvas>
                    </div>
                    <!-- News block -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ url('Website/charts/charts.js') }}"></script>
    <script src="{{ url('Website/charts/charts2.js') }}"></script>
    <script src="{{ url('Website/charts/charts3.js') }}"></script>
@endpush

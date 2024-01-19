@extends('Website/layouts/master')

@section('title')
    Chatboot Section
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
                                <h5>
                                    <a href="../index.html">Website</a> /
                                    <a href="">Chatboot</a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="./liveChat.html">Chat Room</a></li>
                                        <li><a href="users.html">Users</a></li>
                                        <li>
                                            <a class="active" href="./chatboot.html">ChatBoot</a>
                                        </li>
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
    <!-- Navbar -->
    <div class="container-fluid">
        <div class="row mt-3 mb-4">
            <div class="col-md-3 card p-4 mb-2">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <ul class="list-group list-group-horizontal-sm">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <ul class="list-group list-group-horizontal-md">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <ul class="list-group list-group-horizontal-lg">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <ul class="list-group list-group-horizontal-xl">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <ul class="list-group list-group-horizontal-xxl">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="">
                    <div class="card p-4 mb-1">
                        <div class="d-flex flex-start w-100">
                            <img class="rounded-circle shadow-1-strong me-3 p-1" src="{{ url('Website/img/chat.png') }}"
                                alt="avatar" width="40" height="40" />
                            <div class="form-outline w-100">
                                <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff"></textarea>
                                <label class="form-label" for="textAreaExample">Message</label>
                            </div>
                        </div>
                        <div class="float-end mt-2 pt-1">
                            <button type="button" class="btn btn-primary btn-sm">
                                Post
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-sm">
                                Cancel
                            </button>
                        </div>
                    </div>
                    <div class="card-body card mb-1">
                        <div class="d-flex flex-start align-items-center">
                            <img class="rounded-circle shadow-1-strong me-3 p-2" src="{{ url('Website/img/chat.png') }}"
                                alt="avatar" width="60" height="60" />
                            <div>
                                <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                                <p class="text-muted small mb-0">
                                    Shared publicly - Jan 2020
                                </p>
                            </div>
                        </div>

                        <p class="mt-3 mb-4 pb-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip consequat.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip consequat.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip consequat.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip consequat.
                            laboris nisi ut aliquip consequat.
                            laboris nisi ut aliquip consequat.
                            laboris nisi ut aliquip consequat.
                        </p>

                        <div class="small d-flex justify-content-start">
                            <a href="#!" class="d-flex align-items-center me-3">
                                <i class="far fa-thumbs-up me-2"></i>
                                <p class="mb-0">Like</p>
                            </a>
                            <a href="#!" class="d-flex align-items-center me-3">
                                <i class="far fa-comment-dots me-2"></i>
                                <p class="mb-0">Comment</p>
                            </a>
                            <a href="#!" class="d-flex align-items-center me-3">
                                <i class="fas fa-share me-2"></i>
                                <p class="mb-0">Share</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 card mb-2">
                <div class="list-group list-group-light">
                    <a href="#" class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2">
                        A simple default list group item</a>
                    <a href="#"
                        class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2 list-group-item-primary">
                        A simple primary list group item</a>
                    <a href="#"
                        class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2 list-group-item-secondary">
                        A simple secondary list group item</a>
                    <a href="#"
                        class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2 list-group-item-success">
                        A simple success list group item</a>
                    <a href="#"
                        class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2 list-group-item-danger">
                        A simple danger list group item</a>
                    <a href="#"
                        class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2 list-group-item-warning">
                        A simple warning list group item</a>
                    <a href="#"
                        class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2 list-group-item-info">
                        A simple info list group item</a>
                    <a href="#"
                        class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2 list-group-item-light">
                        A simple light list group item</a>
                    <a href="#"
                        class="list-group-item list-group-item-action px-3 border-0 rounded-3 list-group-item-dark">
                        simple dark list group item</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">John Doe</p>
                                        <p class="text-muted mb-0">john.doe@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Alex Ray</p>
                                        <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Kate Hunington</p>
                                        <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="https://mdbootstrap.com/img/new/avatars/9.jpg" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Soraya Letto</p>
                                        <p class="text-muted mb-0">soraya.letto@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="https://mdbootstrap.com/img/new/avatars/11.jpg" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Zeynep Dudley</p>
                                        <p class="text-muted mb-0">zeynep.dudley@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="https://mdbootstrap.com/img/new/avatars/15.jpg" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Ayat Black</p>
                                        <p class="text-muted mb-0">ayat.black@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- <script src="{{url('Dashboard/js/chart.js')}}"></script> --}}
@endpush

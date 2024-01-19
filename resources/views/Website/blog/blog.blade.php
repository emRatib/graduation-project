@extends('Website/layouts/master')

@section('title')
    Social media newsfeed
@endsection

@push('css')
    {{-- <link rel="stylesheet" href="{{URL::asset('Website/css/custom-style.css')}}" /> --}}
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
                                <h5><a href="./index.html">Website</a> / <a href="./index.html">Home</a></h5>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="blog.html">Home</a></li>
                                        <li><a href="show.html">Blog</a></li>
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
    <div class="d-flex justify-content-center mt-4 mb-4">
        <div class="" style="width: 78rem">
            <div class="px-0">
                <div class="card mb-3">
                    <div class="p-3">
                        <h4 class="d-flex align-items-center mb-0">
                            <button type="button" class="btn btn-primary" data-mdb-toggle="modal"
                                data-mdb-target="#staticBackdrop2">
                                <i class="fab fa-twitter me-2"></i>Twitter
                            </button>
                            <i class="far fa-xs fa-star ms-auto text-primary"></i>
                        </h4>
                    </div>
                </div>
                <div>
                    <div class="d-flex p-3 card mb-3">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (29).webp" class="rounded-circle"
                            height="50" width="50" alt="Avatar" loading="lazy" />
                        <div class="d-flex w-100 ps-5">
                            <div class="w-100">
                                <a href="">
                                    <h6 class="text-body">
                                        Miley Cyrus
                                        <span class="small text-muted font-weight-normal">@mileycyrus</span>
                                        <span class="small text-muted font-weight-normal"> • </span>
                                        <span class="small text-muted font-weight-normal">2h</span>
                                        <span><i class="fas fa-angle-down float-end"></i></span>
                                    </h6>
                                </a>
                                <p style="line-height: 1.2;">
                                    Lorem ipsum dolor, sit amet <a href="">#consectetur</a> adipisicing elit.
                                    Nobis assumenda eveniet ipsum libero mollitia vero doloremque
                                    <a href="">#perspiciatis</a> molestiae omnis, quam iure dicta reprehenderit
                                    distinctio facere labore atque, sit <a href="">#ratione</a> quo.
                                </p>
                                <ul class="list-unstyled d-flex justify-content-between mb-0 pe-xl-5">
                                    <li>
                                        <i class="far fa-comment"></i>
                                    </li>
                                    <li><i class="fas fa-retweet"></i><span class="small ps-2">7</span></li>
                                    <li><i class="far fa-heart"></i><span class="small ps-2">35</span></li>
                                    <li>
                                        <i class="far fa-share-square"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex p-3 card mb-3">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (29).webp" class="rounded-circle"
                            height="50" width="50px" alt="Avatar" loading="lazy" />
                        <div class="d-flex w-100 ps-5">
                            <div class="w-100">
                                <a href="#">
                                    <h6 class="text-body">
                                        Miley Cyrus
                                        <span class="small text-muted font-weight-normal">@mileycyrus</span>
                                        <span class="small text-muted font-weight-normal"> • </span>
                                        <span class="small text-muted font-weight-normal">3h</span>
                                        <span><i class="fas fa-angle-down float-end"></i></span>
                                    </h6>
                                </a>
                                <p style="line-height: 1.2;">
                                    Nobis assumenda eveniet ipsum libero mollitia vero doloremque molestiae
                                    reprehenderit.

                                </p>
                                <div class="card border mb-3 shadow-0" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (21).webp"
                                                alt="Avatar" class="img-fluid rounded-left" />
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <p class="card-text" style="line-height: 1;">
                                                    Title of the news
                                                </p>
                                                <p class="card-text small mb-0" style="line-height: 1.2;">
                                                    This is a wider card with supporting text below as a natural lead-in
                                                    to additional content.
                                                </p>
                                                <p class="card-text small mb-0" style="line-height: 1.2;">
                                                    <i class="fas fa-link fa-xs pe-1"></i>example.pl
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between mb-0 pe-xl-5">
                                    <li>
                                        <i class="far fa-comment"></i>
                                    </li>
                                    <li><i class="fas fa-retweet"></i><span class="small ps-2">51</span></li>
                                    <li><i class="far fa-heart"></i><span class="small ps-2">185</span></li>
                                    <li>
                                        <i class="far fa-share-square"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex p-3 card mb-3">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (22).webp" class="rounded-circle"
                            height="50" width="50px" alt="Avatar" loading="lazy" />
                        <div class="d-flex w-100 ps-5">
                            <div class="w-100">
                                <a href="#">
                                    <h6 class="text-body">
                                        Bob Marley
                                        <span class="small text-muted font-weight-normal">@bobmarley</span>
                                        <span class="small text-muted font-weight-normal"> • </span>
                                        <span class="small text-muted font-weight-normal">5h</span>
                                        <span><i class="fas fa-angle-down float-end"></i></span>
                                    </h6>
                                </a>
                                <p style="line-height: 1.2;">
                                    Lorem ipsum dolor, sit amet <a href="">#consectetur</a> adipisicing elit.
                                    Officiis, <a href="">#repellat</a>. Error cumque temporibus eum pariatur
                                    ducimus facere? Obcaecati fugit, nobis eos <a href="">#deserunt</a> odit
                                    libero voluptatibus, iste laudantium, tempore ratione ut.
                                </p>
                                <div class="card border mb-3 shadow-0" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (20).webp"
                                                alt="Avatar" class="img-fluid rounded-left" />
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <p class="card-text" style="line-height: 1;">
                                                    Title of the news
                                                </p>
                                                <p class="card-text small mb-0" style="line-height: 1.2;">
                                                    This is a wider card with supporting text below as a natural lead-in
                                                    to additional content.
                                                </p>
                                                <p class="card-text small mb-0" style="line-height: 1.2;">
                                                    <i class="fas fa-link fa-xs pe-1"></i>example.pl
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between mb-0 pe-xl-5">
                                    <li>
                                        <i class="far fa-comment"></i>
                                    </li>
                                    <li><i class="fas fa-retweet"></i><span class="small ps-2">8</span></li>
                                    <li><i class="far fa-heart"></i><span class="small ps-2">97</span></li>
                                    <li>
                                        <i class="far fa-share-square"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex p-3 card mb-3">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (24).webp" class="rounded-circle"
                            height="50" width="50px" alt="Avatar" loading="lazy" />
                        <div class="d-flex w-100 ps-5">
                            <div class="w-100">
                                <a href="">
                                    <h6 class="text-body">
                                        Anna Doe
                                        <span class="small text-muted font-weight-normal">@annadoe</span>
                                        <span class="small text-muted font-weight-normal"> • </span>
                                        <span class="small text-muted font-weight-normal">7h</span>
                                        <span><i class="fas fa-angle-down float-end"></i></span>
                                    </h6>
                                </a>
                                <p style="line-height: 1.2;">
                                    Error cumque temporibus eum pariatur ducimus facere? Obcaecati fugit, nobis
                                    eos <a href="">#deserunt</a> odit libero voluptatibus, iste laudantium,
                                    tempore ratione ut.
                                </p>
                                <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp"
                                    class="img-fluid rounded mb-3 w-100" alt="Fissure in Sandstone" />
                                <ul class="list-unstyled d-flex justify-content-between mb-0 pe-xl-5">
                                    <li>
                                        <i class="far fa-comment"></i>
                                    </li>
                                    <li><i class="fas fa-retweet"></i><span class="small ps-2">11</span></li>
                                    <li><i class="far fa-heart"></i><span class="small ps-2">65</span></li>
                                    <li>
                                        <i class="far fa-share-square"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex p-3 card mb-3 mb-5">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (3).webp" class="rounded-circle"
                            height="50" width="50px" alt="Avatar" loading="lazy" />
                        <div class="d-flex w-100 ps-5">
                            <div class="w-100">
                                <a href="">
                                    <h6 class="text-body">
                                        Mark Twain
                                        <span class="small text-muted font-weight-normal">@marktawin</span>
                                        <span class="small text-muted font-weight-normal"> • </span>
                                        <span class="small text-muted font-weight-normal">10h</span>
                                        <span><i class="fas fa-angle-down float-end"></i></span>
                                    </h6>
                                </a>
                                <p style="line-height: 1.2;">
                                    Obcaecati fugit, nobis eos odit libero voluptatibus, iste laudantium,
                                    tempore ratione ut.
                                </p>
                                <div class="ratio ratio-16x9 mb-3">
                                    <iframe src="https://www.youtube.com/embed/vlDzYIIOYmM" title="YouTube video"
                                        allowfullscreen></iframe>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between mb-0 pe-xl-5">
                                    <li>
                                        <i class="far fa-comment"></i>
                                    </li>
                                    <li><i class="fas fa-retweet"></i><span class="small ps-2">34</span></li>
                                    <li><i class="far fa-heart"></i><span class="small ps-2">159</span></li>
                                    <li>
                                        <i class="far fa-share-square"></i>
                                    </li>
                                </ul>
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
<div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="exampleModalLabel2"
    aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center"
        style="max-width: 50rem ;margin: auto;margin-top: 100px;margin-bottom: 100px;">
        <div class="modal-content w-75">
            <div class="card-body p-5">
                <div class="d-flex">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                        height="50" width="50px" alt="Avatar" loading="lazy" />
                    <div class="form-outline m-2">
                        <textarea class="form-control" id="textAreaExample2" rows="8"></textarea>
                        <label class="form-label" for="textAreaExample2">Message</label>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <ul class="list-unstyled d-flex flex-row ps-5 pt-3" style="margin-left: 50px;">
                        <li>
                            <a href=""><i class="far fa-image pe-2"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-photo-video px-2"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-chart-bar px-2"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="far fa-smile px-2"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="far fa-calendar-check px-2"></i></a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-primary btn-rounded">Tweet</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

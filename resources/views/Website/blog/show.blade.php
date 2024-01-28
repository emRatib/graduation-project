@extends('Website/layouts/master')

@section('title')
    Show Post
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
    <!--Section: Newsfeed-->
    <div class="d-flex justify-content-center mt-3 mb-3">
        <div class="card" style="max-width: 78rem">
            <div class="card-body">
                <!-- Data -->
                <div class="d-flex mb-3">
                    <a href="">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/18.webp" class="border rounded-circle me-2"
                            alt="Avatar" style="height: 40px" />
                    </a>
                    <div>
                        <a href="" class="text-dark mb-0">
                            <strong>Anna Doe</strong>
                        </a>
                        <a href="" class="text-muted d-block" style="margin-top: -6px">
                            <small>10h</small>
                        </a>
                    </div>
                </div>
                <!-- Description -->
                <div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Atque ex non impedit corporis sunt nisi nam fuga
                        dolor est, saepe vitae delectus fugit, accusantium qui
                        nulla aut adipisci provident praesentium?
                    </p>
                </div>
            </div>
            <!-- Media -->
            <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp" class="w-100" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                </a>
            </div>
            <!-- Media -->
            <!-- Interactions -->
            <div class="card-body">
                <!-- Reactions -->
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <a href="">
                            <i class="fas fa-thumbs-up text-primary"></i>
                            <i class="fas fa-heart text-danger"></i>
                            <span>124</span>
                        </a>
                    </div>
                    <div>
                        <a href="" class="text-muted"> 8 comments </a>
                    </div>
                </div>
                <!-- Reactions -->

                <!-- Buttons -->
                <div class="d-flex justify-content-between text-center border-top border-bottom mb-4">
                    <button type="button" class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                        <i class="fas fa-thumbs-up me-2"></i>Like
                    </button>
                    <button type="button" class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                        <i class="fas fa-comment-alt me-2"></i>Comment
                    </button>
                    <button type="button" class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                        <i class="fas fa-share me-2"></i>Share
                    </button>
                </div>
                <!-- Buttons -->

                <!-- Comments -->

                <!-- Input -->
                <div class="add-post">
                    <div class="d-flex mb-3">
                        <a href="">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/18.webp" class="border rounded-circle me-2"
                                alt="Avatar" style="height: 40px" />
                        </a>
                        <div class="form-outline w-100">
                            <textarea class="form-control" id="textAreaExample" rows="2"></textarea>
                            <label class="form-label" for="textAreaExample">Write a comment</label>
                        </div>
                    </div>
                    <div class="float-end mt-2 pt-1">
                        <button type="button" class="btn btn-primary btn-sm">
                            Post comment
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-sm">
                            Cancel
                        </button>
                    </div>
                </div>
                <!-- Input -->

                <!-- Answers -->

                <!-- Single answer -->
                <div class="d-flex mb-3">
                    <a href="">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp" class="border rounded-circle me-2"
                            alt="Avatar" style="height: 40px" />
                    </a>
                    <div>
                        <div class="bg-light rounded-3 px-3 py-1">
                            <a href="" class="text-dark mb-0">
                                <strong>Malcolm Dosh</strong>
                            </a>
                            <a href="" class="text-muted d-block">
                                <small>Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Natus, aspernatur!</small>
                            </a>
                        </div>
                        <a href="" class="text-muted small ms-3 me-2"><strong>Like</strong></a>
                        <a href="" class="text-muted small me-2"><strong>Reply</strong></a>
                    </div>
                </div>

                <!-- Single answer -->
                <div class="d-flex mb-3">
                    <a href="">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/5.webp" class="border rounded-circle me-2"
                            alt="Avatar" style="height: 40px" />
                    </a>
                    <div>
                        <div class="bg-light rounded-3 px-3 py-1">
                            <a href="" class="text-dark mb-0">
                                <strong>Rhia Wallis</strong>
                            </a>
                            <a href="" class="text-muted d-block">
                                <small>Et tempora ad natus autem enim a distinctio
                                    quaerat asperiores necessitatibus commodi dolorum
                                    nam perferendis labore delectus, aliquid placeat
                                    quia nisi magnam.</small>
                            </a>
                        </div>
                        <a href="" class="text-muted small ms-3 me-2"><strong>Like</strong></a>
                        <a href="" class="text-muted small me-2"><strong>Reply</strong></a>
                    </div>
                </div>

                <!-- Single answer -->
                <div class="d-flex mb-3">
                    <a href="">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/6.webp" class="border rounded-circle me-2"
                            alt="Avatar" style="height: 40px" />
                    </a>
                    <div>
                        <div class="bg-light rounded-3 px-3 py-1">
                            <a href="" class="text-dark mb-0">
                                <strong>Marcie Mcgee</strong>
                            </a>
                            <a href="" class="text-muted d-block">
                                <small>
                                    Officia asperiores autem sit rerum architecto a
                                    deserunt doloribus obcaecati, velit ab at, ad
                                    delectus sapiente! Voluptatibus quaerat suscipit
                                    in nostrum necessitatibus illum nemo quo beatae
                                    obcaecati quidem optio fugit ipsam distinctio,
                                    illo repellendus porro sequi alias perferendis ea
                                    soluta maiores nisi eligendi? Mollitia debitis
                                    quam ex, voluptates cupiditate magnam
                                    fugiat.</small>
                            </a>
                        </div>
                        <a href="" class="text-muted small ms-3 me-2"><strong>Like</strong></a>
                        <a href="" class="text-muted small me-2"><strong>Reply</strong></a>
                    </div>
                </div>

                <!-- Single answer -->
                <div class="d-flex mb-3">
                    <a href="">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/10.webp" class="border rounded-circle me-2"
                            alt="Avatar" style="height: 40px" />
                    </a>
                    <div>
                        <div class="bg-light rounded-3 px-3 py-1">
                            <a href="" class="text-dark mb-0">
                                <strong>Hollie James</strong>
                            </a>
                            <a href="" class="text-muted d-block">
                                <small>Voluptatibus quaerat suscipit in nostrum
                                    necessitatibus</small>
                            </a>
                        </div>
                        <a href="" class="text-muted small ms-3 me-2"><strong>Like</strong></a>
                        <a href="" class="text-muted small me-2"><strong>Reply</strong></a>
                    </div>
                </div>

                <!-- Answers -->

                <!-- Comments -->
            </div>
            <!-- Interactions -->
        </div>
    </div>
    <!--Section: Newsfeed-->
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

@extends('Website/layouts/master')

@section('title')
    website users home
@endsection
@push('css')
    {{-- <link rel="stylesheet" href="{{URL::asset('Website/css/custom-style.css')}}" /> --}}
@endpush
@section('sub-header')
    <!-- header -->
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
                                <h6>
                                    <a href="./index.html">Website / </a>
                                    <a href="./index.html">Users /</a>
                                    <a href="./index.html">Home</a>
                                </h6>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">Home</a></li>
                                        <li><a href="medicalInfo.html">Medical Info</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="contact.html">Settings</a></li>
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
    <!-- Carousels wrapper -->
    {{-- <section class="wrapper">
        <i class="fa-solid fa-arrow-left button" id="prev"></i>
        <div class="image-container">
            <div class="carousels">
                <div class="img">
                    <img src="{{ url('Website/img/pannel1.png') }}" alt="" />
                    <h3>image 1</h3>
                    <p>paragraph</p>
                </div>
                <div class="img">
                    <img src="{{ url('Website/img/pannel2.png') }}" alt="" />
                    <h3>image 1</h3>
                    <p>paragraph</p>
                </div>
                <div class="img">
                    <img src="{{ url('Website/img/pannel3.png') }}" alt="" />
                    <h3>image 1</h3>
                    <p>paragraph</p>
                </div>
                <div class="img">
                    <img src="{{ url('Website/img/pannel1.png') }}" alt="" />
                    <h3>image 1</h3>
                    <p>paragraph</p>
                </div>
            </div>
            <i class="fa-solid fa-arrow-right button" id="next"></i>
        </div>
    </section> --}}
    <!-- Carousel wrapper -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <!-- Indicators -->
        {{-- <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
                aria-label="Slide 3"></button>
        </div> --}}

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <img src="{{ url('Dashboard/img/pannels/slide1.png') }}" style="height: 500px" class="d-block w-100"
                    alt="Sunset Over the City" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p class="text-white">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(18).webp" style="height: 500px"
                    class="d-block w-100" alt="Sunset Over the City" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p class="text-white">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(33).webp" style="height: 500px"
                    class="d-block w-100" alt="Sunset Over the City" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p class="text-white">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
            <i class="fa-solid fa-arrow-left card p-3 rounded-circle" id="prev"></i>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
            <i class="fa-solid fa-arrow-right card p-3 rounded-circle" id="next"></i>
        </button>
    </div>
    <!-- Carousel wrapper -->
    <div class="container">
        <div class="row col-md-12 mt-5 mb-5">
            <div class="col-md-3 ">
                <div class="row card ">
                    <ul class="list-group list-group-light">
                        <li class="list-group-item px-3 border-0">
                            Type 1 diabetes is also called childhood diabetes and is an
                            autoimmune disease, that is, the body's immunity attacks and
                        </li>
                        <li class="list-group-item px-3 border-0">
                            destroys pancreatic cells, leading to a severe decrease in insulin
                            secretion. Type 1 diabetics usually develop the disease in
                            childhood and require insulin daily. Type 1 diabetics make up
                        </li>
                        <li class="list-group-item px-3 border-0">
                            associated with obesity. Type 2 diabetes is caused by the body's
                        </li>
                        <li class="list-group-item px-3 border-0">
                            during pregnancy only in a pregnant woman, as the placenta
                            secretes hormones that inhibit the work of insulin. Postpartum
                        </li>
                        <li class="list-group-item px-3 border-0">
                            Prediabetes is a condition in which the level of sugar is higher
                            than normal, but not as high as diabetes. The normal glucose
                        </li>
                        <li class="list-group-item px-3 border-0">
                            resistance to the hormone insulin, and the cells' response to
                        </li>
                    </ul>
                </div>
                <div class="row m-1"></div>
                <div class="row card">
                    <ul class="list-group list-group-light">

                        <li class="list-group-item px-3 border-0">
                            Type 1 diabetes is also called childhood diabetes and is an
                            autoimmune disease, that is, the body's immunity attacks and
                        </li>
                        <li class="list-group-item px-3 border-0">
                            destroys pancreatic cells, leading to a severe decrease in insulin
                            secretion. Type 1 diabetics usually develop the disease in
                            childhood and require insulin daily. Type 1 diabetics make up
                        </li>
                        <li class="list-group-item px-3 border-0">
                            associated with obesity. Type 2 diabetes is caused by the body's
                        </li>
                    </ul>
                </div>
                <div class="row m-1"></div>
                <div class="row card p-3">
                    <ul class="list-group list-group-light">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                    style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">John Doe</p>
                                    <p class="text-muted mb-0">john.doe@gmail.com</p>
                                </div>
                            </div>
                            <span class="badge rounded-pill badge-success">Active</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle"
                                    alt="" style="width: 45px; height: 45px" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Alex Ray</p>
                                    <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                </div>
                            </div>
                            <span class="badge rounded-pill badge-primary">Onboarding</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle"
                                    alt="" style="width: 45px; height: 45px" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Kate Hunington</p>
                                    <p class="text-muted mb-0"></p>hunington@gmail.com</p>
                                </div>
                            </div>
                            <span class="badge rounded-pill badge-warning">Awaiting</span>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 m-1 card p-5 text-center">
                        <h3>Type Of Diabetes</h3>
                    </div>
                    <div class="col-md-12 m-1 card">
                        <br />
                        <a href="" class="text-dark">
                            <h5>Type one of Diabetes</h5>
                            <p>
                                Type 1 diabetes is also called childhood diabetes and is an
                                autoimmune disease, that is, the body's immunity attacks and
                                destroys pancreatic cells, leading to a severe decrease in
                                insulin secretion. Type 1 diabetics usually develop the disease
                                in childhood and require insulin daily. Type 1 diabetics make up
                                10% of diabetics. Read also: Diabetes in children
                            </p>

                        </a>
                    </div>
                    <div class="col-md-12 m-1 card p-3">
                        <a href="" class="text-dark">
                            <h5>Type tow of Diabetes</h5>
                            <p>
                                Type 2 diabetes : It is the most common type, and is usually
                                associated with obesity. Type 2 diabetes is caused by the body's
                                resistance to the hormone insulin, and the cells' response to
                                the hormone is disturbed so that glucose builds up in the blood.
                            </p>

                        </a>
                    </div>
                    <div class="col-md-12 m-1 card p-3">
                        <a href="" class="text-dark">
                            <h5>Gestational Sugar</h5>
                            <p>
                                Gestational diabetes is the state of high blood sugar levels
                                during pregnancy only in a pregnant woman, as the placenta
                                secretes hormones that inhibit the work of insulin. Postpartum
                                gestational diabetes recovers spontaneously.
                            </p>

                        </a>
                    </div>
                    <div class="col-md-12 m-1 card p-3">
                        <a href="" class="text-dark">
                            <h5>Pre-diabetes</h5>
                            <p>
                                Prediabetes is a condition in which the level of sugar is higher
                                than normal, but not as high as diabetes. The normal glucose
                                level is between 70-99 mg/dL, and the fasting glucose level in
                                the diabetic patient is higher than 126 mg/dL, and in the case
                                of pre-diabetes the glucose level is between 100-125 mg/dL. A
                                patient with prediabetes is at risk of developing type 2
                                diabetes, but does not have complete diabetes symptoms.
                            </p>
                        </a>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="accordion col-md-12 m-1 card p-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button data-mdb-collapse-init class="accordion-button" type="button"
                                    data-mdb-toggle="collapse" data-mdb-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-mdb-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It
                                    is hidden by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These
                                    classes control the overall appearance, as well as the showing
                                    and hiding via CSS transitions. You can modify any of this
                                    with custom CSS or overriding our default variables. It's also
                                    worth noting that just about any HTML can go within the
                                    <strong>.accordion-body</strong>, though the transition does
                                    limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                    data-mdb-toggle="collapse" data-mdb-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-mdb-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It
                                    is hidden by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These
                                    classes control the overall appearance, as well as the showing
                                    and hiding via CSS transitions. You can modify any of this
                                    with custom CSS or overriding our default variables. It's also
                                    worth noting that just about any HTML can go within the
                                    <strong>.accordion-body</strong>, though the transition does
                                    limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
                                    data-mdb-toggle="collapse" data-mdb-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-mdb-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It
                                    is hidden by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These
                                    classes control the overall appearance, as well as the showing
                                    and hiding via CSS transitions. You can modify any of this
                                    with custom CSS or overriding our default variables. It's also
                                    worth noting that just about any HTML can go within the
                                    <strong>.accordion-body</strong>, though the transition does
                                    limit overflow.
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
    <script src="{{ url('Website/js/slider.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('select[name="Section"]').on('change', function() {
                var SectionId = $(this).val();
                if (SectionId) {
                    $.ajax({
                        url: "{{ URL::to('section') }}/" + SectionId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="product"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="product"]').append('<option value="' +
                                    value + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
@endpush

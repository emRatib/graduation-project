@extends('Website/layouts/master')

@section('title')
    website appointment doctors
@endsection

@push('css')
    {{ url('Website/img/chat.png') }}
    <link rel="stylesheet" href="{{ URL::asset('Website/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Website/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Website/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Website/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Website/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Website/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Website/css/gijgo.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Website/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Website/css/slicknav.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Website/css/website_style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Website/css/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Website/css/bootstrap.min.css') }}" />
@endpush

@section('sub-header')
    <header style="margin-top: -30px">
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
                                <h6><a href="../index.html">Website</a>/ <a href="../index.html">Appointment</a> / <a href="./Doctors.html">Doctors</a></h6>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">home</a></li>
                                        <li><a href="Doctors.html">Doctors</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#test-form">Make an Appointment</a>
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
    <!-- expert_doctors_area_start -->
    <div class="expert_doctors_area doctor_page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="single_expert mb-40">
                        <div class="expert_thumb">
                            <img src="img/experts/1.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Mirazul Alom</h3>
                            <span>Neurologist</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single_expert mb-40">
                        <div class="expert_thumb">
                            <img src="img/experts/2.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Mirazul Alom</h3>
                            <span>Neurologist</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single_expert mb-40">
                        <div class="expert_thumb">
                            <img src="img/experts/3.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Mirazul Alom</h3>
                            <span>Neurologist</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single_expert mb-40">
                        <div class="expert_thumb">
                            <img src="img/experts/4.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Mirazul Alom</h3>
                            <span>Neurologist</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single_expert mb-40">
                        <div class="expert_thumb">
                            <img src="img/experts/6.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Mirazul Alom</h3>
                            <span>Neurologist</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single_expert mb-40">
                        <div class="expert_thumb">
                            <img src="img/experts/7.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Mirazul Alom</h3>
                            <span>Neurologist</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single_expert mb-40">
                        <div class="expert_thumb">
                            <img src="img/experts/8.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Mirazul Alom</h3>
                            <span>Neurologist</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single_expert mb-40">
                        <div class="expert_thumb">
                            <img src="img/experts/9.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Mirazul Alom</h3>
                            <span>Neurologist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- expert_doctors_area_end -->

    <!-- testmonial_area_start -->
    <div class="testmonial_area">
        <div class="testmonial_active owl-carousel">
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end -->

    <!-- business_expert_area_start  -->
    <div class="business_expert_area">
        <div class="business_tabs_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                    role="tab" aria-controls="home" aria-selected="true">Excellent Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Qualified
                                    Doctors</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Emergency
                                    Departments</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="border_bottom">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Leading edge care for Your family</h3>
                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                        It esteems luckily picture placing drawing. Apartments frequently or motionless
                                        on
                                        reasonable projecting expression.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="img/about/business.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Leading edge care for Your family</h3>
                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                        It esteems luckily picture placing drawing. Apartments frequently or motionless
                                        on
                                        reasonable projecting expression.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="img/about/business.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Leading edge care for Your family</h3>
                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                        It esteems luckily picture placing drawing. Apartments frequently or motionless
                                        on
                                        reasonable projecting expression.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="img/about/business.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- business_expert_area_end  -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box">
            <div class="popup_inner">
                <h3>Make an Appointment</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-6">
                            <input id="datepicker" placeholder="Pick date" />
                        </div>
                        <div class="col-xl-6">
                            <input id="datepicker2" placeholder="Suitable time" />
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Select Department">Department</option>
                                <option value="1">Eye Care</option>
                                <option value="2">Physical Therapy</option>
                                <option value="3">Dental Care</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Doctors">Doctors</option>
                                <option value="1">Mirazul Alom</option>
                                <option value="2">Monzul Alom</option>
                                <option value="3">Azizul Isalm</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="Name" />
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="Phone no." />
                        </div>
                        <div class="col-xl-12">
                            <input type="email" placeholder="Email" />
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->
@endsection

@push('js')
    <!-- JS here -->
    <script src="{{ url('Website/js_appointment/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/popper.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/bootstrap.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/owl.carousel.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/ajax-form.js') }}"></script>
    <script src="{{ url('Website/js_appointment/waypoints.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/scrollIt.js') }}"></script>
    <script src="{{ url('Website/js_appointment/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/wow.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/nice-select.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/jquery.slicknav.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/plugins.js') }}"></script>
    <script src="{{ url('Website/js_appointment/gijgo.min.js') }}"></script>
    <!--contact js-->
    <script src="{{ url('Website/js_appointment/contact.js') }}"></script>
    <script src="{{ url('Website/js_appointment/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/jquery.form.js') }}"></script>
    <script src="{{ url('Website/js_appointment/jquery.validate.min.js') }}"></script>
    <script src="{{ url('Website/js_appointment/mail-script.js') }}"></script>
    <script src="{{ url('Website/js_appointment/main.js') }}"></script>
    <script>
        $("#datepicker").datepicker({
            iconsLibrary: "fontawesome",
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>',
            },
        });
        $("#datepicker2").datepicker({
            iconsLibrary: "fontawesome",
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>',
            },
        });
        $(document).ready(function() {
            $(".js-example-basic-multiple").select2();
        });
    </script>
@endpush

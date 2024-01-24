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
        <form id="patientDataForm">
            @csrf
            <!-- example 3 -->
            <input type="hidden" name="user_id" value="{{ Auth('web')->user()->id }}">
            <div class="">
                <h4 class="mb-3 text-center">Entre Data</h4>
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-6">
                        <!-- Material input -->
                        <div class="align-items-center">
                            <div class="form-outline col-auto">
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2"
                                    name="gender" />
                                <label class="form-label" for="formTextExample2">gender</label>
                            </div>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-6">
                        <div class="align-items-center">
                            <div class="form-outline col-auto">
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2"
                                    name="age" />
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
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2"
                                    name="hypertension" />
                                <label class="form-label" for="formTextExample2">hypertension</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="align-items-center">
                            <div class="form-outline col-auto">
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2"
                                    name="blood_glucose_level" />
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
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2"
                                    name="heart_disease" />
                                <label class="form-label" for="formTextExample2">heart_disease</label>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->
                    <div class="col-6">
                        <div class="align-items-center">
                            <div class="form-outline col-auto">
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2"
                                    name="smoking_history" />
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
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2"
                                    name="bmi" />
                                <label class="form-label" for="formTextExample2">bmi</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="align-items-center">
                            <div class="form-outline col-auto">
                                <input type="text" id="formTextExample2" class="form-control p-3 mt-3 mb-2"
                                    name="HbA1c_level" />
                                <label class="form-label" for="formTextExample2">HbA1c_level</label>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <div class="d-flex justify-content-center mt-3">
                    <button id="submitButton" type="submit" class="btn btn-primary btn-rounded px-5"
                        data-mdb-ripple-init>Start
                        Now</button>
                </div>
            </div>
            <!-- example 3 -->
        </form>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Request Status</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="responseMessage">...</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
    {{--
    <div class="modal-dialog modal-xl">...</div>
    <div class="modal-dialog modal-lg">...</div>
    <div class="modal-dialog modal-sm">...</div>
    <!-- Full screen modal -->
    <div class="modal-dialog modal-fullscreen-sm-down">...</div>
    <!-- Scrollable modal -->
    <div class="modal-dialog modal-dialog-scrollable">...</div>
    --}}
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#patientDataForm').submit(function(event) {
                event.preventDefault();

                // Disable the submit button and show loading text or spinner
                $('#submitButton').prop('disabled', true).html(
                    '<i class="fa fa-spinner fa-spin"></i> Loading...');

                $.ajax({
                    type: 'POST',
                    url: '{{ route('getstart.store') }}',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#responseMessage').html('<div class="alert alert-success">' +
                            response.message + '</div>');
                    },
                    error: function(error) {
                        // Parse the JSON response if it's a JSON string
                        var errorResponse = JSON.parse(error.responseText);

                        // Check if the errorResponse has a 'message' property
                        if (errorResponse.message) {
                            var errorHtml = '<div class="alert alert-warning">' + errorResponse
                                .message + '</div>';

                            for (var fieldName in errorResponse.errors) {
                                if (errorResponse.errors.hasOwnProperty(fieldName)) {
                                    var fieldErrors = errorResponse.errors[fieldName];
                                    fieldErrors.forEach(function(errorMessage) {
                                        errorHtml +=
                                            '<div class="alert alert-warning">' +
                                            errorMessage + '</div>';
                                    });
                                }
                            }

                            $('#responseMessage').html(errorHtml);
                        }

                    },
                    complete: function() {
                        // Enable the submit button and restore its original text
                        $('#submitButton').prop('disabled', false).html('Submit');
                        
                        // Open the modal
                        $('#exampleModal').modal('show');
                    },

                });
            });
        });
    </script>
@endpush

{{-- ("

gender": "Female",
"age": 60.0,
"hypertension": 1,
"heart_disease": 0,
"smoking_history": "never",
"bmi": 28.5,
"HbA1c_level": 7.0,
"blood_glucose_level": 120

) --}}

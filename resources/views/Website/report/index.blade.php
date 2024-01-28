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
    <div class="container-fluid my-3">
        <div class="row">
            <!-- reports and progress -->
            <div class="col-md-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body text-center">
                        <div class="mt-3 mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                class="rounded-circle img-fluid" style="width: 100px;" />
                        </div>
                        <h4 class="mb-2">{{ Auth('web')->user()->name }}</h4>
                        <p class="text-muted mb-4">{{ Auth('web')->user()->phone }} <span class="mx-2">|</span> <a
                                href="#!">{{ Auth('web')->user()->email }}</a></p>

                        <button type="button" id="submitButton" class="btn btn-primary btn-rounded btn-lg shadow-1">
                            Check Diabetes
                        </button>
                    </div>
                </div>
                <div class=" row mt-2">
                    <div class="col-md-4">
                        <div class="card p-4 mt-2 ">
                            <p class="mb-2 h5">Diabetes type</p>
                            <p class="text-muted mb-0" id="d_type">
                                @if ($PatientDiabetes)
                                    {{ $PatientDiabetes->diabetes_type }}
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 mt-2 ">
                            <p class="mb-2 h5">Diabetes Duration</p>
                            <p class="text-muted mb-0" id="d_time">
                                @if ($PatientDiabetes)
                                    {{ $PatientDiabetes->created_at }}
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 mt-2 ">
                            <p class="mb-2 h5">Diabetes Status</p>
                            <p class="text-muted mb-0" id="d_status">
                                @if ($PatientDiabetes)
                                    @if ($PatientDiabetes->diabetes_status == 0)
                                        <span class="badge rounded-pill badge-primary">You not Diabetes</span>
                                    @else
                                        <span class="badge rounded-pill badge-warning">You Diabetes</span>
                                    @endif
                                @endif
                        </div>
                        </p>
                    </div>
                </div>
                {{-- <div class="card p-3">
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
                </div> --}}
            </div>

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

            <!-- chart -->
            <input type="hidden" id="gender" value="{{ $PatientData->gender }}">
            <input type="hidden" id="age" value="{{ $PatientData->age }}">
            <input type="hidden" id="hypertension" value="{{ $PatientData->hypertension }}">
            <input type="hidden" id="heart_disease" value="{{ $PatientData->heart_disease }}">
            <input type="hidden" id="smoking_history" value="{{ $PatientData->smoking_history }}">
            <input type="hidden" id="bmi" value="{{ $PatientData->bmi }}">
            <input type="hidden" id="HbA1c_level" value="{{ $PatientData->HbA1c_level }}">
            <input type="hidden" id="blood_glucose_level" value="{{ $PatientData->blood_glucose_level }}">

            <!-- the right data dable -->
            <div class="col-md-6">
                <div class="card-body card">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Age</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">
                                @if ($PatientData)
                                    @php
                                        $age = $PatientData->age;
                                    @endphp

                                    @if ($age < 18)
                                        {{ $PatientData->age }} (years) - This person is a child.
                                    @elseif ($age >= 18 && $age < 60)
                                        {{ $PatientData->age }} (years) - This person is an adult.
                                    @else
                                        {{ $PatientData->age }} (years) - This person is a senior.
                                    @endif
                                @endif
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Hypertension</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">
                                @if ($PatientData)
                                    @if ($PatientData->hypertension)
                                        {{ $PatientData->hypertension }} - This patient has hypertension.
                                    @else
                                        {{ $PatientData->hypertension }} - This patient does not have hypertension.
                                    @endif
                                @endif
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Heart Disease</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">
                                @if ($PatientData)
                                    @if ($PatientData->heart_disease)
                                        {{ $PatientData->heart_disease }} - This patient has heart disease.
                                    @else
                                        {{ $PatientData->heart_disease }} - This patient does not have heart disease.
                                    @endif
                                @endif
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Smoking History</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">
                                @if ($PatientData)
                                    {{ $PatientData->smoking_history }}
                                @endif
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="mb-0">HbA1c Level</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">
                                @if ($PatientData)
                                    @php
                                        $hba1cLevel = $PatientData->HbA1c_level;
                                    @endphp

                                    @if ($hba1cLevel >= 7.0)
                                        {{ $PatientData->HbA1c_level }} % - This patient has a high HbA1c level.
                                    @elseif ($hba1cLevel >= 5.7 && $hba1cLevel < 7.0)
                                        {{ $PatientData->HbA1c_level }} % - This patient has a medium HbA1c level.
                                    @else
                                        {{ $PatientData->HbA1c_level }} % - This patient has a low HbA1c level.
                                    @endif
                                @endif
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="mb-0">Blood Glucose Level</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">
                                @if ($PatientData)
                                    @php
                                        $bloodGlucoseLevel = $PatientData->blood_glucose_level;
                                    @endphp

                                    @if ($bloodGlucoseLevel > 180)
                                        {{ $PatientData->blood_glucose_level }} (mg/dL) - This patient has a high blood
                                        glucose level.
                                    @elseif ($bloodGlucoseLevel < 70)
                                        {{ $PatientData->blood_glucose_level }} (mg/dL) - This patient has a low blood
                                        glucose level.
                                    @else
                                        {{ $PatientData->blood_glucose_level }} (mg/dL) - This patient has a stable blood
                                        glucose level.
                                    @endif
                                @endif

                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="mb-0">BMI</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">
                                @if ($PatientData)
                                    @php
                                        $bmi = $PatientData->bmi;
                                    @endphp

                                    @if ($bmi < 18.5)
                                        {{ $PatientData->bmi }} - This patient is categorized as thin (underweight).
                            </p>
                        @elseif ($bmi >= 18.5 && $bmi < 25)
                            {{ $PatientData->bmi }} - This patient has a normal BMI.</p>
                        @else
                            {{ $PatientData->bmi }} - This patient is categorized as fat (overweight or obese).</p>
                            @endif
                            @endif
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="card p-2" id="chart"></div> --}}
            </div>

        </div>
        <div class="card p-3 my-2 shadow-0 rounded-0 mt-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Reports</p>
                <h3>Health Data Represetation</h3>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 mt-3">
                <div class="card" style ="height:25vh">
                    <div class="card-header bg-primary text-white">
                        Age
                    </div>
                    <div class="card-body">
                        <div class="progress" style="height: 30px;">
                            @php
                                $age = $PatientData->age;
                                // Assuming a maximum age of 100 for this example
                                $percentage = min($age, 100) . '%';
                            @endphp
                            <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $percentage }};"
                                aria-valuenow="{{ $age }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        Age: {{ $age }} years
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 mt-3">
                <div class="card" style ="height:25vh">
                    <div class="card-header bg-primary text-white">
                        Hypertension
                    </div>
                    <div class="card-body">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="hypertensionSwitch"
                                {{ $PatientData->hypertension ? 'checked' : '' }} disabled>
                            <label class="custom-control-label" for="hypertensionSwitch">
                                @if ($PatientData->hypertension)
                                    On (Hypertension)
                                @else
                                    Off (No Hypertension)
                                @endif
                            </label>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        Hypertension Status {{ $PatientData->hypertension }}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 mt-3">
                <div class="card" style ="height:25vh">
                    <div class="card-header bg-primary text-white">
                        Heart Disease Status
                    </div>
                    <div class="card-body">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="heartDiseaseSwitch"
                                {{ $PatientData->heart_disease ? 'checked' : '' }} disabled>
                            <label class="custom-control-label" for="heartDiseaseSwitch">
                                @if ($PatientData->heart_disease)
                                    On (Heart Disease)
                                @else
                                    Off (No Heart Disease)
                                @endif
                            </label>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        heart disease: {{ $PatientData->heart_disease }} years
                    </div>
                </div>
            </div>

        </div>
        <div class="card p-3 my-2 shadow-0 rounded-0 mt-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Reports</p>
                <h3>Health Data Charts</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 mt-3">
                <!-- News block -->
                <div class="card" style="height: 50vh">
                    <div class="card-header bg-primary text-white">
                        blood glucose level
                    </div>
                    <div class="card-body">
                        <div id="frost-chart"></div>
                    </div>
                    <div class="card-footer text-muted">
                        blood glucose level: {{ $PatientData->blood_glucose_level }} %
                    </div>
                </div>
                <!-- News block -->
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 mt-3">
                <!-- News block -->
                <div class="card" style="height: 50vh">
                    <div class="card-header bg-primary text-white">
                        HbA1c Level
                    </div>
                    <div class="card-body">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="card-footer text-muted">
                        HbA1c Level: {{ $PatientData->blood_glucose_level }} %
                    </div>
                </div>
                <!-- News block -->
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 mt-3">
                <!-- News block -->
                <div class="card" style="height: 50vh">
                    <div class="card-header bg-primary text-white">
                        BMI
                    </div>
                    <div class="card-body">
                        <div class="p-2" id="chart"></div>
                    </div>
                    <div class="card-footer text-muted">
                        BMI: {{ $PatientData->bmi }}
                    </div>
                </div>
                <!-- News block -->
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Request Status</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="responseMessage">...</div>
                    <div class="modal-footer">
                        <button id="close_btn" type="button" class="btn btn-secondary"
                            data-mdb-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ url('Website/charts/charts.js') }}"></script>
    <script src="{{ url('Website/charts/frost-chart.js') }}"></script>
    <script src="{{ url('Website/charts/charts2.js') }}"></script>
    <script src="{{ url('Website/charts/charts3.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Get values from hidden input fields
            var gender = $('#gender').val();
            var age = $('#age').val();
            var hypertension = $('#hypertension').val();
            var heartDisease = $('#heart_disease').val();
            var smokingHistory = $('#smoking_history').val();
            var bmi = $('#bmi').val();
            var hba1cLevel = $('#HbA1c_level').val();
            var bloodGlucoseLevel = $('#blood_glucose_level').val();

            // Data to be sent in the request
            var requestData = {
                "gender": gender,
                "age": parseFloat(age),
                "hypertension": parseInt(hypertension),
                "heart_disease": parseInt(heartDisease),
                "smoking_history": smokingHistory,
                "bmi": parseFloat(bmi),
                "HbA1c_level": parseFloat(hba1cLevel),
                "blood_glucose_level": parseInt(bloodGlucoseLevel)
            };
            console.log(requestData)

            // console.log('gender :- '+typeof((gender))+gender);
            // console.log('age :- '+typeof((parseInt(age)))+age);
            // console.log('hypertension :- '+typeof((hypertension))+hypertension);
            // console.log('heart_disease :- '+typeof((heart_disease))+heart_disease);
            // console.log('smoking_history :- '+typeof((smoking_history))+smoking_history);
            // console.log('bmi :- '+typeof((parseInt(bmi)))+bmi);
            // console.log('HbA1c_level :- '+typeof((HbA1c_level))+HbA1c_level);
            // console.log('blood_glucose_level :- '+typeof((blood_glucose_level))+blood_glucose_level);

            $('#submitButton').click(function() {

                $(this).prop('disabled', true).html(
                    '<i class="fa fa-spinner fa-spin"></i> Loading...');

                // Make the POST request
                $.ajax({
                    type: 'POST',
                    url: 'http://127.0.0.1:5000/predict_diabetes',
                    contentType: 'application/json', // Set the Content-Type header to JSON
                    data: JSON.stringify(requestData), // Convert the data to JSON string
                    success: function(response) {
                        // Handle the success response
                        console.log(response);
                        // $('#responseMessage').html('<div class="alert alert-success">' +
                        //     response.message + '</div>');
                        patientdiabetesreport(response.prediction, response.type);
                    },
                    error: function(error) {
                        // Handle the error response
                        console.error(error);
                        $('#responseMessage').html('<div class="alert alert-success">' +
                            error.responseText + '</div>');
                    },
                    complete: function() {
                        // Enable the submit button and restore its original text
                        $('#submitButton').prop('disabled', false).html('Submited Done');
                        // $('#exampleModal').modal('show');
                    },

                });
            });

            function patientdiabetesreport(status, type) {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('patientdiabetesreport.store') }}',
                    data: {
                        _token: "{{ csrf_token() }}",
                        diabetes_status: status,
                        diabetes_type: type,
                        user_id: "{{ Auth('web')->user()->id }}",
                    }
                }).done(function(response) {
                    console.log(response);
                    $('#exampleModal').modal('show');
                    $('#responseMessage').html(response.message + ' status = ' + status);
                    $('#d_type').html('Dabetes 1');
                    var currentDate = new Date();
                    var timestamp = currentDate.getTime('Y-m-d H:i:s');
                    $('#d_time').html(timestamp);
                    $('#d_status').html(status);
                    $("#close_btn").click(() => {
                        // location.href = "/patientdiabetesreport";

                    })

                });
            }

        });
    </script>
@endpush

@extends('Dashboard/layouts/master')

@section('title')
    Add Doctors
@endsection

@section('page-url')
    <h5 class="pt-1">Dashboard / <span class="active"> Add Doctors </span></h5>
@endsection


@push('css')
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/custom-style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/custom-style-settings.css') }}" />
@endpush

@section('page-header')
    <div class="header">
        <div class="layer1"></div>
        <div class="layer2">
        </div>
    </div>
@endsection

@section('content')

    <!-- show the request response -->
    @if (session()->has('add'))
        <script>
            window.onload = function() {
                $("#DoctorAlert").modal('show');
                $(".modal-body").html('<p> The Doctor Data Saved Successfully </p>');
            }
        </script>
    @endif

    <!-- doctor form data  -->
    <div class="mx-5 my-3">
        <div class="card p-2" style="margin-top: -70px">
            <!-- write your content here -->
            <div class="data-form p-3">
                <form action="{{ route('Doctors.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-md-12 text-center mb-4">
                        <img class="rounded-circle shadow-4" id="output"
                            src="{{ URL('Dashboard/img/doctors/default.png') }}" style="width: 150px;" alt="Avatar" />
                    </div>
                    <div class="row" id="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="name" id="firstName" class="form-control form-control-lg" />
                                <label class="form-label" for="firstName">Name</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="email" name="email" id="lastName" class="form-control form-control-lg" />
                                <label class="form-label" for="lastName">Email Address</label>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="row">
                        <div class="col-md-6 mb-4 d-flex align-items-center">
                            <div class="form-outline datepicker w-100">
                                <input name="password" type="password" class="form-control form-control-lg"
                                    id="birthdayDate" />
                                <label for="birthdayDate" class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 d-flex align-items-center">
                            <div class="form-outline datepicker w-100">
                                <input name="phone" type="tel" class="form-control form-control-lg"
                                    id="birthdayDate" />
                                <label for="birthdayDate" class="form-label">Phone</label>
                            </div>
                        </div>
                    </div>



                    <div class="row" id="row">
                        <div class="col-md-6">
                            <label class="form-label select-label">Choose option</label>
                            <select name="section_id" class="select form-control">
                                <option value="1" disabled>Choose option</option>
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="customFile">Default file input example</label>
                            <input type="file" class="form-control" id="customFile" accept="image/*" name="photo"
                                onchange="loadFile(event)" />
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>

                    <div class="row" id="row">
                        <div class="col-md-12 mt-3">
                            <select multiple="multiple" class="select form-control h-100" name="appointments[]">
                                <option value="1" disabled>Select Appointmets</option>
                                @foreach ($appointments as $appointment)
                                    <option value="{{ $appointment->id }}">{{ $appointment->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="my-4">
                        <button class="btn btn-primary btn-lg w-100" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- alert modal -->
    <div class="modal fade" id="DoctorAlert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">...</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                        data-mdb-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-mdb-ripple-init>Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endpush

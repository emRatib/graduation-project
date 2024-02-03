@extends('Dashboard/layouts/master')

@section('title')
    Doctors
@endsection

@section('page-url')
    <h5 class="pt-1">Dashboard / <span class="active"> Doctors </span></h5>
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
    @elseif (session()->has('edit_pass'))
        <script>
            window.onload = function() {
                $("#DoctorAlert").modal('show');
                $(".modal-body").html('<p> The Doctor Password Updated Successfully </p>');
            }
        </script>
    @elseif (session()->has('edit_status'))
        <script>
            window.onload = function() {
                $("#DoctorAlert").modal('show');
                $(".modal-body").html('<p> The Doctor Data Status Updated Successfully </p>');
            }
        </script>
    @endif

    <!-- show data -->
    <div class="mx-5 my-3">
        <div class="container-fluid card p-0" style="margin-top: -70px">
            <!-- write your content here -->
            <div class="card-header pb-0">
                <div class="options my-2 d-flex justify-content-between">
                    <!-- add -->
                    <div class="add">
                        <a href="{{ route('Doctors.create') }}" class="btn btn-primary" role="button"
                            aria-pressed="true">Add Doctor</a>
                        <button type="button" class="btn btn-danger" id="btn_delete_all">Delete Select</button>
                    </div>
                    <!-- search -->
                    <div class="input-group w-50">
                        <div class="form-outline" data-mdb-input-init>
                            <input id="search-input" type="search" class="form-control" />
                            <label class="form-label" for="form1">Search</label>
                        </div>
                        <button id="search-button" type="button" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="table overflow-x-scroll">
                    <table id="example" class="table align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><input name="select_all" id="example-select-all" type="checkbox" /></th>
                                <th>name</th>
                                <th>img</th>
                                <th>email</th>
                                <th>section</th>
                                <th>phone</th>
                                <th>appointments</th>
                                <th>Status</th>
                                <th>created at</th>
                                <th>Processes</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 10px">
                            @foreach ($doctors as $doctor)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <input type="checkbox" name="delete_select" value="{{ $doctor->id }}"
                                            class="delete_select">
                                    </td>
                                    <td>{{ $doctor->name }}</td>
                                    <td>
                                        @if ($doctor->image)
                                            <img src="{{ Url::asset('Dashboard/img/doctors/' . $doctor->image->filename) }}"
                                                height="50px" width="50px" alt="">
                                        @else
                                            <img src="{{ Url::asset('Dashboard/img/doctor_default.png') }}" height="50px"
                                                width="50px" alt="">
                                        @endif
                                    </td>
                                    <td>{{ $doctor->email }}</td>
                                    <td>{{ $doctor->section->name }}</td>
                                    <td>{{ $doctor->phone }}</td>
                                    <td>
                                        @foreach ($doctor->doctorappointments as $appointment)
                                            {{ $appointment->name }}
                                        @endforeach
                                    </td>
                                    <td>
                                        <div class="dot-label bg-{{ $doctor->status == 1 ? 'success' : 'danger' }} ml-1">
                                        </div>
                                        {{ $doctor->status == 1 ? 'Enabled' : 'Not_enabled' }}
                                    </td>

                                    <td>{{ $doctor->created_at }}</td>
                                    <td>

                                        <div class="dropdown">
                                            <button aria-expanded="false" aria-haspopup="true"
                                                class="btn ripple btn-outline-primary btn-sm" data-mdb-toggle="dropdown"
                                                type="button">Processes<i class="fas fa-caret-down mr-1"></i></button>
                                            <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item" href="{{ route('Doctors.edit', $doctor->id) }}"><i
                                                        style="color: #0ba360" class="fas fa-user"></i>&nbsp;&nbsp; Edit
                                                    Data</a>
                                                <a class="dropdown-item" href="#" data-mdb-toggle="modal"
                                                    data-mdb-target="#update_password{{ $doctor->id }}"><i
                                                        class="fas fa-key"></i>&nbsp;&nbsp; Change Password</a>
                                                <a class="dropdown-item" href="#" data-mdb-toggle="modal"
                                                    data-mdb-target="#update_status{{ $doctor->id }}"><i
                                                        class="fas fa-edit"></i>&nbsp;&nbsp;
                                                    Update Status</a>
                                                <a class="dropdown-item" href="#" data-mdb-toggle="modal"
                                                    data-mdb-target="#delete{{ $doctor->id }}"><i
                                                        class="fas fa-trash"></i>&nbsp;&nbsp; Delete Data</a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @include('Dashboard.Doctors.delete')
                                @include('Dashboard.Doctors.delete_select')
                                @include('Dashboard.Doctors.update_password')
                                @include('Dashboard.Doctors.update_status')
                            @endforeach
                        </tbody>
                    </table>
                </div>

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
    <!--Internal  Notify js -->
    <script src="{{ URL::asset('dashboard/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('/plugins/notify/js/notifit-custom.js') }}"></script>

    <script>
        $(function() {
            jQuery("[name=select_all]").click(function(source) {
                checkboxes = jQuery("[name=delete_select]");
                for (var i in checkboxes) {
                    checkboxes[i].checked = source.target.checked;
                }
            });
        })
    </script>


    <script type="text/javascript">
        $(function() {
            $("#btn_delete_all").click(function() {
                var selected = [];
                $("#example input[name=delete_select]:checked").each(function() {
                    selected.push(this.value);
                });

                if (selected.length > 0) {
                    $('input[id="delete_select_id"]').val(selected);
                    $('#delete_select').modal('show')
                }
                // alert('delete');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#search-input").keyup(function() {
                let value = $(this).val().toLowerCase();
                $("tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        })
    </script>
@endpush

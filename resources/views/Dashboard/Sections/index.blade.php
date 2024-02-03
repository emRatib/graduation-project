@extends('Dashboard/layouts/master')

@section('title')
    section
@endsection

@section('page-url')
    <h5 class="pt-1">Dashboard / <span class="active"> section </span></h5>
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
    <!-- Button trigger modal -->

    <div class="mx-5 my-3">
        <div class="container-fluid card" style="margin-top: -70px">
            <!-- write your content here -->
            <div class="card-header pb-0">
                <div class="options my-2 d-flex justify-content-between">
                    <div class="add">
                        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#add">
                            add sections
                        </button>
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
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">#Num</th>
                                <th class="wd-15p border-bottom-0">name
                                </th>
                                <th class="wd-15p border-bottom-0">Description
                                </th>
                                <th class="wd-20p border-bottom-0">Created at</th>
                                <th class="wd-20p border-bottom-0">Options</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            @foreach ($sections as $section)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="{{ route('section.show', $section->id) }}">{{ $section->name }}</a>
                                    </td>
                                    <td>{{ \Str::limit($section->description, 50) }}</td>
                                    <td>{{ $section->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a type="button" class="btn btn-sm btn-primary text-white" data-mdb-toggle="modal"
                                            data-mdb-target="#edit{{ $section->id }}"><i class="fa-solid fa-pen"></i></a>
                                        <a class="modal-effect btn btn-sm btn-danger text-white" data-effect="effect-scale"
                                            data-mdb-toggle="modal" data-mdb-target="#delete{{ $section->id }}"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                @include('Dashboard.Sections.edit')
                                @include('Dashboard.Sections.delete')
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @include('Dashboard.Sections.add')
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- chart file -->
    <script src="{{ url('Dashboard/js/chart.js') }}"></script>
    <!-- frost chart file -->
    <script src="{{ url('Dashboard/js/frost_chart.js') }}"></script>
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

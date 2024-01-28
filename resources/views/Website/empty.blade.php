@extends('Website/layouts/master')

@section('title')
    website home
@endsection

@push('css')
    {{-- <link rel="stylesheet" href="{{URL::asset('Website/css/custom-style.css')}}" /> --}}
    {{-- {{url('Website/img/chat.png')}} --}}
@endpush

@section('sub-header')
@endsection

@section('content')
@endsection

@push('js')
    {{-- <script src="{{url('Website/js/chart.js')}}"></script> --}}
@endpush

<div class="accordion-item">
    <h2 class="accordion-header" id="headingAiet">
        <button data-mdb-collapse-init class="accordion-button collapsed" type="button"
            data-mdb-toggle="collapse" data-mdb-target="#collapseAiet" aria-expanded="false"
            aria-controls="collapseAiet">
            Accordion Item #3
        </button>
    </h2>
    <div id="collapseAiet" class="accordion-collapse collapse" aria-labelledby="headingAiet"
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

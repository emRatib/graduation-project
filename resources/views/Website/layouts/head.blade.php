<!-- Title -->
<title>@yield('title','document')</title>
<link rel="stylesheet" href="{{URL::asset('Website/css/slider.css')}}" />
<link rel="stylesheet" href="{{URL::asset('Website/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('Website/css/style.css')}}" />
<link rel="stylesheet" href="{{URL::asset('Website/css/mdb.min.css')}}" />
<script src="{{URL::asset('Website/js/vendor/jquery-1.12.4.min.js')}}"></script>
{{-- <link rel="stylesheet" href="{{URL::asset('Website/css/mdb.dark.min.css')}}" /> --}}
@stack('css')


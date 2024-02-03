<!-- Title -->
<title>@yield('title', 'document')</title>
<link rel="stylesheet" href="{{ URL::asset('Dashboard/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('Dashboard/css/mdb.min.css') }}" />
<script src="{{ URL::asset('Website/js/vendor/jquery-1.12.4.min.js') }}"></script>
{{-- <link rel="stylesheet" href="{{URL::asset('Dashboard/css/mdb.rtl.min.css')}}" /> --}}
<link rel="stylesheet" href="{{ URL::asset('Dashboard/css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('Dashboard/css/flaticon.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('Dashboard/css/sidebar.css') }}" />
{{-- <link rel="stylesheet" href="{{URL::asset('Dashboard/css/mdb.dark.min.css')}}" /> --}}
@stack('css')
@yield('css')

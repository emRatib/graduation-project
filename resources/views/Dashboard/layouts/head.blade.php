<!-- Title -->
<title>@yield('title','document')</title>
<link rel="stylesheet" href="{{URL::asset('Dashboard/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('Dashboard/css/mdb.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('Dashboard/css/mdb.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('Dashboard/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('Dashboard/css/flaticon.css')}}" />
<link rel="stylesheet" href="{{URL::asset('Dashboard/css/sidebar.css')}}" />
@stack('css')
@yield('css')


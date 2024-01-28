<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- internal assets -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />

    <!--main logo icone -->
    <link rel="shortcut icon" href="{{ url('Dashboard/img/logo/logo.png') }}" type="image/x-icon" />

    <!-- internet bootstrap css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
    <!-- internet bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/frappe-charts@1.2.4/dist/frappe-charts.min.iife.js"></script>

    <!-- this section have the main css files -->
    @include('Dashboard/layouts.head')

</head>

<body>
    <div class="main-container">
        <!-- this is main sidebar -->
        @include('Dashboard/layouts.main-sidebar')

        <div class="body">
            <!-- this is main header -->
            @include('Dashboard/layouts.main-header')

            <!-- page header -->
            @yield('page-header')

            <!-- page content -->
            @yield('content')

            <!-- main footer -->
            @include('Dashboard/layouts.footer')

            <!-- scripts -->
            @include('Dashboard/layouts.footer-scripts')
        </div>

    </div>
</body>

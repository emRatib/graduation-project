<!-- main-header opened -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Navbar brand -->
        <i role="button" id="toggle2" class="fa-solid fa-bars m-3 hide_btn" style="font-size: 30px;"></i>

        <a class="navbar-brand mt-2 mt-lg-0" href="#">
            @yield('page-url')
        </a>
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <!-- Left links -->

            <!-- Right elements -->
            <div class="d-flex align-items-center justify-content-start">
                <form class="d-flex input-group w-auto bg-white mr-5" style="border-radius: 20px">
                    <input type="search" class="form-control border-0 bg-white" placeholder="Search..."
                        aria-label="Search" aria-describedby="search-addon" style="border-radius: 20px" />
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </form>
                <!-- Icon -->
                <a class="text-reset me-3 cicle-div" href="#">
                    <i class="fa-solid fa-arrows-rotate"></i>
                </a>

                <!-- Notifications -->
                <div class="dropdown">
                    <a class="text-reset me-3 dropdown-toggle hidden-arrow cicle-div" href="#"
                        id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-globe"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">Some news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </div>
                <!-- Avatar -->
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow cicle-div" href="#"
                        id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img width="35" height="35" src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                            class="rounded-circle" height="25" alt="Black and White Portrait of a Man"
                            loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="#">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                        <li>
                            @if (auth('web')->check())
                                <form method="POST" action="{{ route('logout.user') }}">
                                @elseif(auth('admin')->check())
                                    <form method="POST" action="{{ route('logout.admin') }}">
                                    @elseif(auth('doctor')->check())
                                        <form method="POST" action="{{ route('logout.doctor') }}">
                                        @elseif(auth('employee')->check())
                                            <form method="POST" action="{{ route('logout.employee') }}">
                            @endif
                            @csrf
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                            this.closest('form').submit();">Logout</a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- /main-header -->

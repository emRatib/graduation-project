<div class="sidebar media-query card" id="sidebar">
    <div class="header p-2">
        <img src="{{ url('Dashboard/img/logo/logo.png') }}" alt="" />
        <h3>Salmtac</h3>
        <i role="button" id="toggle" class="fa-solid fa-bars"></i>
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{route('dashboard.admin')}}">
                <i class='bx bx-grid-alt'></i>
                <span class="link_name">Dashboard</span>
            </a>
        </li>
        <li class="">
            <div class="iocn-link">
                <a role="button">
                    <i class="fa-solid fa-sitemap"></i>
                    <span class="link_name">Sections</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                {{-- <li><a class="link_name" href="#">Services</a></li> --}}
                <li><a href="{{route('section.index')}}">view all sections</a></li>
            </ul>
        </li>
        <li class="">
            <div class="iocn-link">
                <a role="button">
                    <i class="fa-solid fa-sitemap"></i>
                    <span class="link_name">Doctors</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                {{-- <li><a class="link_name" href="#">Services</a></li> --}}
                <li><a href="{{route('Doctors.index')}}">view all Doctors</a></li>
            </ul>
        </li>
        <li class="">
            <div class="iocn-link">
                <a role="button">
                    <i class="fa-solid fa-sitemap"></i>
                    <span class="link_name">Services</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                {{-- <li><a class="link_name" href="#">Services</a></li> --}}
                <li><a href="./services/allServices.html">all Services</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a role="button">
                    <i class="fa-regular fa-file-lines"></i>
                    <span class="link_name">Report</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Report</a></li>
                <li><a href="./reports/patientReports.html">pietient report</a></li>
                <li><a href="./reports/doctorReports.html">doctors report</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a role="button">
                    <i class="fa-solid fa-users"></i>
                    <span class="link_name">Users</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Users</a></li>
                <li><a href="./admin/adminProfile.html">admin profile</a></li>
                <li><a href="./users/manageUsers.html">user management</a></li>
                <li><a href="./users/userProfile.html">user profile</a></li>
                <li><a href="./users/editProfile.html">edit profile</a></li>
            </ul>
        </li>
        <li>
            <a href="{{route('setting.index')}}">
                <i class="fa-solid fa-gear"></i>
                <span class="link_name">Setting</span>
            </a>
        </li>
        <li>
            <a href="./empty.html">
                <i class='bx bx-message-square-detail'></i>
                <span class="link_name">Empty Page</span>
            </a>
        </li>
    </ul>
</div>

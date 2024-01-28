<div class="sidebar media-query card" id="sidebar">
    <div class="header p-2">
        <img src="{{ url('Dashboard/img/logo/logo.png') }}" alt="" />
        <h3>Salmtac</h3>
        <i role="button" id="toggle" class="fa-solid fa-bars"></i>
    </div>
    <ul class="nav-links">
        <li>
            <a href="./index.html">
                <i class='bx bx-grid-alt'></i>
                <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="./index.html">Services</a></li>
            </ul>
        </li>
        <li class="">
            <div class="iocn-link">
                <a href="#">
                    <i class="fa-solid fa-sitemap"></i>
                    <span class="link_name">Services</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Services</a></li>
                <li><a href="./services/allServices.html">all Services</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
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
                <a href="#">
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
            <a href="./settings/setings.html">
                <i class="fa-solid fa-gear"></i>
                <span class="link_name">Setting</span>
            </a>
        </li>
        <li>
            <a href="./empty.html">
                <i class='bx bx-message-square-detail'></i>
                <span class="link_name">Empty Page</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="./settings/setings.html">Setting</a></li>
            </ul>
        </li>
    </ul>
</div>

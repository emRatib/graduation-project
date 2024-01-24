  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
          <!-- Navbar brand -->
          <a class="navbar-brand mt-2 mt-lg-0" href="{{route('website.user')}}">
              <h5 class="pt-1">Home</h5>
          </a>
          <!-- Toggle button -->
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
          </button>

          <!-- Collapsible wrapper -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left links -->
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('getstart.index')}}">Get Start</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./chat/liveChat.html">Live Chat</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./blog/blog.html">Blog</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('patientdiabetesreport.index')}}">Reports</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./deitery/deitery.html">Deitary</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./activity/activity.html">Activity</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./Appointment/index.html">Appointment</a>
                  </li>
              </ul>
              <!-- Left links -->

              <!-- Right elements -->
              <div class="d-flex align-items-center justify-content-start">
                  <!-- Icon -->
                  <a class="text-reset me-3" href="#">
                      <i class="fas fa-message text-white"></i>
                      <span class="badge rounded-pill badge-notification bg-danger">10</span>
                  </a>

                  <!-- Notifications -->
                  <div class="dropdown">
                      <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                          role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-bell text-white"></i>
                          <span class="badge rounded-pill badge-notification bg-danger">1</span>
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
                      <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                          id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                          <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle"
                              height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                          <li>
                              <a class="dropdown-item" href="./profile/profile.html">My profile</a>
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
                                          @elseif(auth('ray_employee')->check())
                                              <form method="POST" action="{{ route('logout.ray_employee') }}">
                                              @elseif(auth('laboratorie_employee')->check())
                                                  <form method="POST"
                                                      action="{{ route('logout.laboratorie_employee') }}">
                                                  @else
                                                      <form method="POST" action="{{ route('logout.patient') }}">
                              @endif
                              @csrf
                              <a class="dropdown-item" href="#"
                                  onclick="event.preventDefault();
                            this.closest('form').submit();"><i
                                      class="bx bx-log-out"></i>Logout</a>
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

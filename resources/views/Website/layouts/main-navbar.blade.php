  <style>
      #editBody {
          display: none;
      }
  </style>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
          <!-- Navbar brand -->
          <a class="navbar-brand mt-2 mt-lg-0" href="{{ route('website.user') }}">
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
                      <a class="nav-link" href="{{ route('getstart.index') }}">Get Start</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('chat.index') }}">Live Chat</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('patientdiabetesreport.index') }}">Reports</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('dietary.index') }}">Dietary</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('activity.index') }}">Activity</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('appointment.index') }}">Appointment</a>
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
                          id="modalAvatarActive" role="button" aria-expanded="false">
                          <img src="{{ URL('Website/img/profiles/ahmed.png') }}" class="rounded-circle"
                              height="30" alt="Black and White Portrait of a Man" loading="lazy" />
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

  <!-- Modal Profile-->
  <div class="modal fade" id="exampleModalProfile" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h6 class="modal-title" id="exampleModalLabel">Profile Information</h6>
                  <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal"
                      aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="text-center">
                      <img src="{{ URL('Website/img/profiles/profile.png') }}" class="rounded-circle" width="120px"
                          height="120px" alt="">
                      <div class="text-center my-3">
                          <!-- edit button -->
                          <button id="btnEdit" class="btn btn-secondary m-2">Edit</button>
                          <!-- logout button -->
                          <button class="btn btn-primary m-2">
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
                              <a class="nav-link" href="#"
                                  onclick="event.preventDefault();
                      this.closest('form').submit();"><i
                                      class="bx bx-log-out"></i>Logout</a>
                              </form>
                          </button>
                      </div>
                  </div>
              </div>
              <div class="modal-footer" id="editBody">
                  <div class="row mb-4">
                      <div class="col">
                          <div class="form-outline">
                              <input type="text" id="bmiResult" class="form-control" min="0"
                                  name="bmi" pattern="[0-9]+(\.[0-9]+)?" />
                              <label class="form-label" for="form7Example1">Name </label>
                          </div>
                      </div>
                      <div class="col">
                          <div class="form-outline">
                              <input type="email" id="form7Example2" class="form-control" name="HbA1c_level" />
                              <label class="form-label" for="form7Example2">Email</label>
                          </div>
                      </div>
                  </div>
                  <div class="text-center">
                      <button type="button" class="btn btn-secondary m-2" data-mdb-ripple-init
                          data-mdb-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary m-2" id="calculateBtn" data-mdb-ripple-init>Save
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <script>
      $(document).ready(function() {
          $('#modalAvatarActive').click(function() {
              $("#exampleModalProfile").modal('show');
          })
          $("#btnEdit").click(function() {
              $("#editBody").slideToggle(200);
          });
      });
  </script>

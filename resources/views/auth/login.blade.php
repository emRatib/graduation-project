@extends('auth/layouts/master')
@section('title')
    login
@endsection
@section('content')
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <div class="container px-4  px-md-5 text-center text-lg-start my-5" style="height:87.8vh">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <h2 class="fw-bold mb-3 text-center">Sign in now</h2>

                            <!-- Tabs navigation -->
                            <ul class="nav nav-tabs mb-5" id="myTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="admin-tab" data-bs-toggle="tab" href="#admin"
                                        role="tab" aria-controls="admin" aria-selected="true">Admin</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="doctors-tab" data-bs-toggle="tab" href="#doctors" role="tab"
                                        aria-controls="doctors" aria-selected="false">Doctors</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="employee-tab" data-bs-toggle="tab" href="#employee"
                                        role="tab" aria-controls="employee" aria-selected="false">Employee</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="user-tab" data-bs-toggle="tab" href="#user" role="tab"
                                        aria-controls="user" aria-selected="false">User</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Administrator Form -->
                                <div class="tab-pane fade show active" id="admin" role="tabpanel"
                                    aria-labelledby="user-tab">
                                    <form method="POST" action="{{ route('login.admin') }}">
                                        @csrf
                                        <!-- 2 column grid layout with text inputs for the first and last names -->

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input id="form3Example3" class="form-control p-2" type="email" name="email"
                                                value="{{ old('email') }}" required autofocus autocomplete="username" />
                                            <label class="form-label" for="form3Example3">Email address</label>
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />


                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4" class="form-control p-2"
                                                type="password" name="password" required autocomplete="current-password" />
                                            <label class="form-label" for="form3Example4">Password</label>
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                        <div class="d-flex justify-content-between mb-4">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                            <!-- Remember Me -->
                                            <div class="form-check">
                                                <label for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox" class="form-check-input me-2"
                                                        name="remember">
                                                    <span
                                                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block mb-4">
                                            Sign in admin
                                        </button>

                                        <!-- Register buttons -->
                                        <div class="text-center">
                                            <p>or sign up with:</p>
                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-facebook-f"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-google"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-twitter"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-github"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Doctor Form -->
                                <div class="tab-pane fade" id="doctors" role="tabpanel" aria-labelledby="admin-tab">
                                    <form method="POST" action="{{ route('login.doctor') }}">
                                        @csrf
                                        <!-- 2 column grid layout with text inputs for the first and last names -->

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input id="form3Example3" class="form-control p-2" type="email"
                                                name="email" value="{{ old('email') }}" required autofocus
                                                autocomplete="username" />
                                            <label class="form-label" for="form3Example3">Email address</label>
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />


                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4" class="form-control p-2"
                                                type="password" name="password" required
                                                autocomplete="current-password" />
                                            <label class="form-label" for="form3Example4">Password</label>
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        <div class="d-flex justify-content-between mb-4">
                                            <!-- Submit button -->
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                            <!-- Remember Me -->
                                            <div class="form-check">
                                                <label for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox" class="form-check-input me-2"
                                                        name="remember">
                                                    <span
                                                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block mb-4">
                                            Sign in doctor
                                        </button>

                                        <!-- Register buttons -->
                                        <div class="text-center">
                                            <p>or sign up with:</p>
                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-facebook-f"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-google"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-twitter"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-github"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Employee Form -->
                                <div class="tab-pane fade" id="employee" role="tabpanel"
                                    aria-labelledby="employee-tab">
                                    <form method="POST" action="{{ route('login.employee') }}">
                                        @csrf
                                        <!-- 2 column grid layout with text inputs for the first and last names -->

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input id="form3Example3" class="form-control p-2" type="email"
                                                name="email" value="{{ old('email') }}" required autofocus
                                                autocomplete="username" />
                                            <label class="form-label" for="form3Example3">Email address</label>
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />


                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4" class="form-control p-2"
                                                type="password" name="password" required
                                                autocomplete="current-password" />
                                            <label class="form-label" for="form3Example4">Password</label>
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        <div class="d-flex justify-content-between mb-4">

                                            <!-- Submit button -->
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                            <!-- Remember Me -->
                                            <div class="form-check">
                                                <label for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox" class="form-check-input me-2"
                                                        name="remember">
                                                    <span
                                                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block mb-4">
                                            Sign in employee
                                        </button>

                                        <!-- Register buttons -->
                                        <div class="text-center">
                                            <p>or sign up with:</p>
                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-facebook-f"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-google"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-twitter"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-github"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <!-- User Form -->
                                <div class="tab-pane fade" id="user" role="tabpanel" aria-labelledby="doctors-tab">
                                    <form method="POST" action="{{ route('login.user') }}">
                                        @csrf
                                        <!-- 2 column grid layout with text inputs for the first and last names -->

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input id="form3Example3" class="form-control p-2" type="email"
                                                name="email" value="{{ old('email') }}" required autofocus
                                                autocomplete="username" />
                                            <label class="form-label" for="form3Example3">Email address</label>
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />


                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4" class="form-control p-2"
                                                type="password" name="password" required
                                                autocomplete="current-password" />
                                            <label class="form-label" for="form3Example4">Password</label>
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                        <div class="d-flex justify-content-between mb-4">

                                            <!-- Submit button -->
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif

                                            <!-- Remember Me -->
                                            <div class="form-check">
                                                <label for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox" class="form-check-input me-2"
                                                        name="remember">
                                                    <span
                                                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block mb-4">
                                            Sign in user
                                        </button>

                                        <!-- Register buttons -->
                                        <div class="text-center">
                                            <p>or sign up with:</p>
                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-facebook-f"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-google"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-twitter"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-github"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bootstrap JS (Make sure to include Bootstrap and Popper.js) -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                    <script>
                        // Activate the User tab by default
                        var userTab = new bootstrap.Tab(document.getElementById('admin-tab'));
                        userTab.show();
                    </script>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 animate" style="z-index: 10">
                    <img class="animated-image" src="{{ url('Dashboard/img/3d/login.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
@endsection

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/ootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/mdb.dark.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/text-holder.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/login-style.css') }}" />

</head>

<body>
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <div class="container px-4  px-md-5 text-center text-lg-start my-5" style="height:87.8vh">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Diabetes <br />
                        <span style="color: hsl(218, 81%, 75%)">for controlle your life </span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus, expedita iusto veniam atque, magni tempora mollitia
                        dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                        ab ipsum nisi dolorem modi. Quos?
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

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
                                    <a class="nav-link" id="doctors-tab" data-bs-toggle="tab" href="#doctors"
                                        role="tab" aria-controls="doctors" aria-selected="false">Doctors</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="employee-tab" data-bs-toggle="tab" href="#employee"
                                        role="tab" aria-controls="employee" aria-selected="false">Employee</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="user-tab" data-bs-toggle="tab" href="#user"
                                        role="tab" aria-controls="user" aria-selected="false">User</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Administrator Form -->
                                <div class="tab-pane fade show active" id="admin" role="tabpanel"
                                    aria-labelledby="user-tab">
                                    <form method="POST" action="{{route('login.admin')}}">
                                        @csrf
                                        <!-- 2 column grid layout with text inputs for the first and last names -->

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input id="form3Example3" class="form-control p-2" type="email"
                                                name="email" value="{{old('email')}}" required autofocus
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
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                            <!-- Remember Me -->
                                            <div class="form-check">
                                                <label for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox"
                                                        class="form-check-input me-2" name="remember">
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
                                <div class="tab-pane fade" id="doctors" role="tabpanel"
                                    aria-labelledby="admin-tab">
                                    <form method="POST" action="{{route('login.doctor')}}">
                                        @csrf
                                        <!-- 2 column grid layout with text inputs for the first and last names -->

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input id="form3Example3" class="form-control p-2" type="email"
                                                name="email" value="{{old('email')}}" required autofocus
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
                                                    <input id="remember_me" type="checkbox"
                                                        class="form-check-input me-2" name="remember">
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
                                    <form method="POST" action="{{route('login.employee')}}">
                                        @csrf
                                        <!-- 2 column grid layout with text inputs for the first and last names -->

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input id="form3Example3" class="form-control p-2" type="email"
                                                name="email" value="{{old('email')}}" required autofocus
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
                                                    <input id="remember_me" type="checkbox"
                                                        class="form-check-input me-2" name="remember">
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
                                <div class="tab-pane fade" id="user" role="tabpanel"
                                    aria-labelledby="doctors-tab">
                                    <form method="POST" action="{{route('login.user')}}">
                                        @csrf
                                        <!-- 2 column grid layout with text inputs for the first and last names -->

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input id="form3Example3" class="form-control p-2" type="email"
                                                name="email" value="{{old('email')}}" required autofocus
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
                                                    <input id="remember_me" type="checkbox"
                                                        class="form-check-input me-2" name="remember">
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
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>

</html>

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
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
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/bootstrap.min.css') }}" />
    {{-- <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/mdb.dark.min.css') }}" /> --}}
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/text-holder.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/login-style.css') }}" />
</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="bg-image">
            <div class="layer" style="height: 100px ;background-color:#3B71CA">

            </div>
            <div class="layer" style="height: 100px ;background-color: #2F5AA2;">

            </div>
        </div>
        <!-- Background image -->

        <div class=" card mx-4 mx-md-5 shadow-5-strong"
            style="
          margin-top: -70px;
          background: hsla(0, 0%, 100%,1);
          backdrop-filter: blur(30px);
          ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 border-right p-3">
                        <h2 class="fw-bold mb-5">Sign up now</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input id="form3Example1" class="form-control" type="text" name="name"
                                            :value="old('name')" required autofocus autocomplete="name" />
                                        <label class="form-label" for="form3Example1">First name</label>
                                    </div>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example2" class="form-control" />
                                        <label class="form-label" for="form3Example2">Last name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input id="form3Example3" class="form-control" type="email" name="email"
                                    :value="old('email')" required autocomplete="username" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input id="form3Example4" class="form-control" type="password" name="password" required
                                    autocomplete="new-password" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />


                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input id="form3Example4" class="form-control" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                                <label class="form-label" for="form3Example4">confirmation Password</label>
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33"
                                    checked />
                                <label class="form-check-label" for="form2Example33">
                                    Subscribe to our newsletter
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Sign up
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
                    <div class="col-lg-6 animate">
                    <img class="animated-image"  src="{{ url('Dashboard/img/3d/register.png') }}" alt="" style="width:500px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>

</html>

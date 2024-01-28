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
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/mdb.dark.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/text-holder.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/css/auth-style.css') }}" />

</head>

<body>
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <div class="container px-4  px-md-5 text-center text-lg-start my-5" style="height:87.8vh">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        @if (auth('web'))
                            <a href="{{ url('/website/user') }}" class="btn btn-secondary mx-2">Return to Website</a>
                        @elseif (auth('admin'))
                            <a href="{{ url('/dashboard/admin') }}" class="btn btn-secondary mx-2">Return to Dashboard</a>
                        @elseif (auth('doctor'))
                            <a href="{{ url('/dashboard/doctor') }}" class="btn btn-secondary mx-2">Return to Dashboard</a>
                        @else
                            <a href="{{ url('/dashboard/employee') }}" class="btn btn-secondary mx-2">Return to
                                Dashboard</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary shadow-0">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-secondary mx-2">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="row gx-lg-5 align-items-center mb-5">

                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-3 display-5 fw-bold ls-tight no-border" style="color: hsl(218, 81%, 95%)">
                        Diabetes
                    </h1>

                    <h1 class="my-3 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        <span style="color: hsl(218, 81%, 75%)">To controlle your Suger</span>
                    </h1>

                    <p class="mb-4 opacity-70 text-wright-container" style="color: hsl(218, 81%, 85%)">

                    </p>
                    <p class="text-wright" hidden>
                        AI algorithms can analyze an individual's diet preferences, limitations,
                        and health goals to generate personalized meal plans.
                        These plans can be designed to help stabilize blood sugar levels,
                        control carbohydrate consumption, and promote overall health.
                        Web applications can integrate with glucose monitors to track and
                        display blood sugar levels in real time. This information helps
                        individuals with diabetes and their healthcare providers make
                        informed decisions about their treatment plans.
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="animate">
                        <img class="animated-image" src="{{ url('Dashboard/img/3d/welcome.png') }}" alt="">
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
    <script>
        setTimeout(() => {
            var index = 0;
            var textWrightContainer = document.querySelectorAll('.text-wright-container');
            var textWright = document.querySelectorAll('.text-wright');

            for (let i = 0; i < textWrightContainer.length; i++) {
                var write = setInterval(function() {
                    textWrightContainer[i].innerHTML += textWright[i].innerHTML[index++];
                    if (index == textWright[i].innerHTML.length) {
                        clearInterval(write);
                    }
                }, 5);
            }
        }, 3000);
    </script>
</body>

</html>

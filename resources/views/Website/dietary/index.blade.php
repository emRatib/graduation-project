@extends('Website/layouts/master')

@section('title')
    Dietary Recomentaction
@endsection

@push('css')
    {{-- <link rel="stylesheet" href="{{URL::asset('Website/css/custom-style.css')}}" /> --}}
    {{-- {{url('Website/img/chat.png')}} --}}
@endpush

@section('sub-header')
    <header>
        <div class="header-area">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="social_media_links">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i> info@docmed.com</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-phone"></i> 160160</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <h6>
                                    <a href="./index.html">Website</a> /
                                    <a href="./index.html">Deitery</a>
                                </h6>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="deitery.html">index</a></li>
                                        <li><a href="#reports.html">Food</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-lg-block"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="container my-2">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-center p-2 my-1">
                    <h3 class="mb-4">Enter Your Data</h3>
                </div>
                <div class="card p-5">
                    <!-- Input Form -->
                    <form id="dietForm">
                        <!-- User Profile Section -->
                        <h3>User Profile</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="age" class="form-label">Gender</label>
                                    <input type="text" class="form-control" id="age" placeholder="like Meal"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" class="form-control" id="age" placeholder="like 55 years"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="age" class="form-label">BMI</label>
                                    <input type="text" class="form-control" id="age" placeholder="like 22.5"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="age" class="form-label">Status</label>
                                    <input type="text" class="form-control" id="age" placeholder="Diabetes or not"
                                        required>
                                </div>
                            </div>
                        </div><br>
                        <!-- Add other user profile input fields -->

                        <!-- Blood Sugar Monitoring Section -->
                        <h3>Blood Sugar Monitoring</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="bloodSugar" class="form-label">Blood Sugar Level (mg/dL)</label>
                                    <input type="number" class="form-control" id="bloodSugar" placeholder="200" required>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="HbA1c_level" class="form-label">HbA1c level</label>
                                    <input type="number" class="form-control" id="HbA1c_level" placeholder="5.5" required>
                                </div>

                            </div>
                        </div><br>
                        <!-- Add other blood sugar monitoring input fields -->



                        <!-- Food Preferences Section -->
                        <h3>Food Preferences</h3>
                        <div class="mb-3">
                            <label for="foodPreferences" class="form-label">Food Preferences</label>
                            <textarea class="form-control" id="foodPreferences" rows="3" required></textarea>
                        </div><br>
                        <!-- Add other food preferences input fields -->

                        <!-- Meal History Section -->
                        <h3>Meal History</h3>
                        <div class="mb-3">
                            <label for="mealHistory" class="form-label">Meal History</label>
                            <textarea class="form-control" id="mealHistory" rows="3" required></textarea>
                        </div>
                        <!-- Add other meal history input fields -->

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Generate Recommendations</button>
                    </form>
                </div>

                <!-- Output Display -->
                <div id="output" class="mt-5">
                    <!-- Output content will be displayed here -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center p-2 my-1">
                <h3 class="mb-4">Diet Recommendations Output</h3>
                </div>
                <div class="card  p-5">
                    <!-- Output Display -->
                    <!-- Output Display -->
                    <div id="output">
                        <h3>Recommendations</h3>
                        <p id="outputContent">
                            Based on your input, here is a personalized meal plan to help control blood sugar levels:
                            <br><br>
                            <img src="https://enwnutrition.com/wp-content/uploads/2023/03/scrambled-eggs-on-toast-feature-revised.jpeg"
                                alt="" class="w-25 mt-1 rounded-1"><br>
                            <strong>Breakfast:</strong> Scrambled eggs with spinach and whole-grain toast.
                            <br>
                            <img src="https://fitfoodiefinds.com/wp-content/uploads/2021/05/chicken-marinade-7-1365x2048-1-768x1024.jpg"
                                alt="" class="w-25 mt-1 rounded-1"><br>
                            <strong>Lunch:</strong> Grilled chicken salad with mixed vegetables.
                            <br>
                            <img src="https://img-global.cpcdn.com/recipes/fb4b9da697e775c2/640x640sq70/photo.webp"
                                alt="" class="w-25 mt-1 rounded-1"><br>
                            <strong>Dinner:</strong> Baked salmon with quinoa and steamed broccoli.
                            <br><br>
                            <strong>Nutritional Information:</strong>
                            <br>
                            Total Calories: 1200 kcal
                            <br>
                            Carbohydrates: 150g
                            <br>
                            Proteins: 80g
                            <br>
                            Fats: 40g
                        </p>
                        <button class="btn btn-primary">Add</button>
                        <button class="btn btn-secondary">Drop</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- <script src="{{url('Dashboard/js/chart.js')}}"></script> --}}
@endpush

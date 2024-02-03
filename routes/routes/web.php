<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Website\PatientDataController;
use App\Http\Controllers\Website\PatientDiabetesController;
use App\Http\Controllers\Website\DietaryRecommendationController;
use App\Http\Controllers\Website\ActivityRecommendationController;
use App\Http\Controllers\Website\BlogController;
use App\Http\Controllers\Website\ChatController;
use App\Http\Controllers\Website\AppointmentController;
use App\Http\Controllers\Website\MailController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth:web','verified')->group(function(){
// Route::middleware('auth:web')->group(function(){

    // home pages routs
    Route::get('/website/user', [WebsiteController::class, 'index'])->name('website.user');
    Route::get('/website/user/medicalinfo', [WebsiteController::class, 'medicalInfo'])->name('website.user.medicalinfo');
    Route::get('/website/user/contact', [WebsiteController::class, 'contact'])->name('website.user.contact');

    // get start routs
    Route::resource('getstart',PatientDataController::class);
    // paietent diabetes data
    Route::resource('patientdiabetesreport',PatientDiabetesController::class);
    //Dietary Recommendation
    Route::resource('dietary',DietaryRecommendationController::class);
    //Activity Recommendation
    Route::resource('activity',ActivityRecommendationController::class);
    //Appointment
    Route::resource('appointment',AppointmentController::class);
    //Blog
    Route::resource('blog',BlogController::class);
    //chat
    Route::resource('chat',ChatController::class);
    // send an email routs
    Route::post('/send-email', [MailController::class, 'sendEmail'])->name('send.email');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

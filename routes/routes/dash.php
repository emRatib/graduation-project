<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\DoctorController;

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

Route::middleware('auth:admin')->group(function(){
    Route::get('/dashboard/admin', [DashboardController::class, 'index'])->name('dashboard.admin');

    // section routs
    Route::resource('section', SectionController::class);

    // settings routs
    Route::resource('setting', SettingController::class);

    // doctors routs
    Route::resource('Doctors', DoctorController::class);
    Route::post('update_password', [DoctorController::class, 'update_password'])->name('update_password');
    Route::post('update_status', [DoctorController::class, 'update_status'])->name('update_status');
});

require __DIR__.'/auth.php';

<?php

namespace App\Http\Controllers\Dashboard_Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        return view('Dashboard.doctor_dashboard.dashboard');
    }
}


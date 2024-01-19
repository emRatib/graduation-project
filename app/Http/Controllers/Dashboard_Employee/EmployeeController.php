<?php

namespace App\Http\Controllers\Dashboard_Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('Dashboard.employee_dashboard.dashboard');
    }
}

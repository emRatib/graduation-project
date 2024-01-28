<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('Website.index');
    }
    public function medicalInfo(){
        return view('Website.home.medicalinfo');
    }
    public function contact(){
        return view('Website.home.contact');
    }
}

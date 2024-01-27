<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\EmployeeLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{

    public function store(EmployeeLoginRequest $request)
    {
        if($request->authenticate()){
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::EMPLOYEE);
        }

        return redirect()->back()->withErrors(['name' => (trans('Dashboard/auth.failed'))]);

    }


    public function destroy(Request $request)
    {
        Auth::guard('employee')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

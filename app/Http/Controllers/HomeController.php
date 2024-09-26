<?php

namespace App\Http\Controllers;
use App\Models\add_emp;
use App\Models\salary_scale;
use App\Models\leave;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     *  \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){

            if(Auth::user()->role == '1'){
        
        return redirect ('/index');
    }
    else{

        return redirect ('/employeeDashboard');
    }
    }
}
}

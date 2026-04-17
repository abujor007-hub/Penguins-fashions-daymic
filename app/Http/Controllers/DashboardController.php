<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(auth()->user()->user_type=='admin'){
            return view('pages.dashboardpage.dashboard-main');
        }else{
            return view('pages.dashboardpage.user-dashboard');
        }
    }
}

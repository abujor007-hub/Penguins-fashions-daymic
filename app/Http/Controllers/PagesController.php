<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.mainpage.home');
    }

    public function manjacket(){
        return view('pages.mainpage.manjacket');
    }

    public function womanjacket(){
        return view('pages.mainpage.womanjacket');
    }

    public function shoes(){
        return view('pages.mainpage.shoes');
    }

        public function shop(){
        return view('pages.mainpage.shop');
    }

    public function contact(){
        return view('pages.mainpage.contact');
    }

    public function productinfo(){
        return view('pages.mainpage.product.info');
    }


    // dashbord page start
    public function dashboard_main(){
        return view('pages.dashboardpage.dashboard-main');
    }
    // dashbord page end

    

}

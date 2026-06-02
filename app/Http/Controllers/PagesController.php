<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
     $data['Man_Jacket']= Products::where('catagory', '=', 'Man Jacket')->take(3)->get();
     $data['Woman_Jacket']= Products::where('catagory', '=', 'Woman Jacket')->take(3)->get();
     $data['Shoes']= Products::where('catagory', '=', 'Shoes')->take(3)->get();
    
        return view('pages.mainpage.home')->with($data);
    }

    public function manjacket(){
        return view('pages.mainpage.manjacket');
    }

    public function women(){
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

    public function productdetails($id){
      
        return view('pages.mainpage.product_details');
    }


    // dashbord page start
    public function dashboard_main(){
        return view('pages.dashboardpage.dashboard-main');
    }
    // dashbord page end

    

}

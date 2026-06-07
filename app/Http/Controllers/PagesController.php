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
         $data['Man_Jacket']= Products::where('catagory', '=', 'Man Jacket')->take(3)->get();
        return view('pages.mainpage.manjacket')->with($data);
    }

    public function women(){
        $data['Woman_Jacket']= Products::where('catagory', '=', 'Woman Jacket')->take(3)->get();
        return view('pages.mainpage.womanjacket')->with($data);
    }

    public function shoes(){
        $data['Shoes']= Products::where('catagory', '=', 'Shoes')->take(3)->get();
        return view('pages.mainpage.shoes')->with($data);
    }

        public function shop(){
            $data['Man_Jacket']= Products::where('catagory', '=', 'Man Jacket')->get();
            $data['Woman_Jacket']= Products::where('catagory', '=', 'Woman Jacket')->get();
            $data['Shoes']= Products::where('catagory', '=', 'Shoes')->get();
            return view('pages.mainpage.shop')->with($data);
        }

    public function contact(){
        
        return view('pages.mainpage.contact');
    }

    public function productdetails($id){
        $products= Products::find($id);
      
        return view('pages.mainpage.product_details',compact('products'));
    }
public function cart(){

$cart= session()->get('cart',[]);

    return view('pages.mainpage.cart', compact('cart'));
}

    // dashbord page start
    public function dashboard_main(){
        return view('pages.dashboardpage.dashboard-main');
    }
    // dashbord page end

    public function cheackout(){
        $cheackout= session()->get('cart',[]);
        return view('pages.mainpage.cheackout', compact('cheackout'));
    }

}

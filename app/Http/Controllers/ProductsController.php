<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function product_page(){
        $catagory = Catagory::all();
        return view('pages.dashboardpage.products.add_products',compact('catagory'));
    }


    public function store_product(Request $request){
        $validated= $request->validate([
        'catagory'=> 'required',
        'title'=> 'required',
        'status'=> 'required',
        'quintity'=> 'required',
        'products_image'=> 'required',
        'description'=> 'required',
        'price'=> 'required',
        'dis_price'=> 'required'

    ]);

 
    $catatory= new Products();
    $catatory->catagory= $request->catagory;
    $catatory->title= $request->title;
    $catatory->status= $request->status;
    $catatory->quintity= $request->quintity;
    $catatory->description= $request->description;
    $catatory->price= $request->price;
    $catatory->dis_price= $request->dis_price;

    $catatory->products_image=$request->products_image->store('products_images', 'public');

    $catatory->save();

    return redirect()->back()->with('success', 'products added successfully');




    }


}

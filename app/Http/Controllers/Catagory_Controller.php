<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class Catagory_Controller extends Controller
{

public function view_catagory(){
    $data=Catagory::all();
    return view('pages.dashboardpage.catagory.catagory_page',compact('data'));
}

public function store_catagory(Request $request){
    $validated= $request->validate([
        'add_catagory'=> 'required',

    ]);
    $data= new Catagory();
    $data->add_catagory=$request->add_catagory;
    $data->save();
    return redirect()->back()->with('success', 'data store successfully ');

    
}

public function delete_catagory(Request $request, $id){
    $data=Catagory::find($id);
    $data->delete();
    return redirect()->back()->with('success', 'catagory items delete successfully');

}
    
}

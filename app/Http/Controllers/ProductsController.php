<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;
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

    public function products_list(){
        $products= Products::all();


        return view('pages.dashboardPage.products.products-list', compact('products'));
    }


 public function edit_products($id){
    $products = Products::find($id);
    $catagory= Catagory::all();

    return view('pages.dashboardPage.products.edit', compact('products', 'catagory'));

 }

 public function update_products(Request $request, $id){

   $validated= $request->validate([
        'catagory'=> 'required',
        'title'=> 'required',
        'status'=> 'required',
        'quintity'=> 'required',

        'description'=> 'required',
        'price'=> 'required',
        'dis_price'=> 'required'

    ]);
    $catagory= Products::find($id);
    if($catagory->products_image && Storage::disk('public')->exists($catagory->products_image)) {
            Storage::disk('public')->delete($catagory->products_image);
               $catagory->products_image = $request->products_image->store('products_images', 'public');
        }
 
//    $catagory->products_image = $request->products_image->store('products_images', 'public');
    $catagory->catagory= $request->catagory;
    $catagory->title= $request->title;
    $catagory->status= $request->status;
    $catagory->quintity= $request->quintity;
    $catagory->description= $request->description;
    $catagory->price= $request->price;
    $catagory->dis_price= $request->dis_price;

   

    $catagory->save();

    return redirect()->back()->with('success', 'products updated successfully');

 }

 public function delete_products($id){
    $products= Products::find($id);
    $products->delete();

    return redirect()->back()->with('success', 'products deleted successfully');
 }
 
//  public function addToCartStore (Request $request, $id){
    
//     $products= Products::findOrFail($id);

//     $cart= session()->get('cart',[]);

//     if(isset($cart[$products->id])){
//         $cart[$products->id]['quintity']++;
//     }else{
//         $cart[$products->id]=[
//             'id'=>$products->id,
//             'name'=>$products->title,
//             'quintity'=>1,
//             'price'=>$products->price,
//             'photo'=>$products->Products_image
//         ];
//     }
//     session()->put('cart', $cart);

//     return redirect()->back()->with('successs', 'Product added to cart successfully');
//  }


public function addToCartStore(Request $request, $id)
{
    $products = Products::findOrFail($id);

    $cart = session()->get('cart', []);



    if (isset($cart[$products->id])) {
        $cart[$products->id]['quintity']++;
    } else {
        $cart[$products->id] = [
            'id' => $products->id,
            'name' => $products->title,
            'quintity' => 1,
            'price' => $products->price,
            'photo' => $products->Products_image,
        ];
    }

    session()->put('cart', $cart);

    if ($request->action == 'checkout') {
        return redirect()->route('checkout.page');
    }

    return back()->with('successs', 'Product added to cart successfully');
}

public function addToCartItemDelete($id){
    $cart= session()->get('cart',[]);

    if(isset($cart[$id])){
        unset($cart[$id]);
        session()->put('cart', $cart);
    }
    return redirect()->back()->with('success', 'product removed from cart successfully');
}


public function addToCartClear(){
    session()->forget('cart');

    return redirect()->route('home.page')->with('success' , 'cart cleared successfully');
}

public function quantity_update(Request $request,$id){
     $request->validate([
            'action' => 'required|in:inc,dec'
        ]);

        $cart = session()->get('cart', []);

        if (!isset($cart[$id])) {
            return back()->with('error', 'Item not found in cart');
        }

        if ($request->action === 'inc') {
            $cart[$id]['quintity']++;
        }

        if ($request->action === 'dec' && $cart[$id]['quintity'] > 1) {
            $cart[$id]['quintity']--;
        }

        session()->put('cart', $cart);

        return back();

}


}

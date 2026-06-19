<?php

use App\Http\Controllers\Catagory_Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

   Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

   
  

Route::middleware('auth')->group(function () {

    Route::post('order/store',[OrderController::class, 'store'])->name('order.store');
 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// main page route start
Route::get('home/page',[PagesController::class,'home'])->name('home.page');
Route::get('manjacket/page',[PagesController::class,'manjacket'])->name('manjacket.page');
Route::get('women/page',[PagesController::class,'women'])->name('women.page');
Route::get('shoes/page',[PagesController::class,'shoes'])->name('shoes.page');
Route::get('shop/page',[PagesController::class,'shop'])->name('shop.page');
Route::get('contact/page',[PagesController::class,'contact'])->name('contact.page');
Route::get('productdetails/page/{id}',[PagesController::class,'productdetails'])->name('productdetails.page');
Route::get('cart/page',[PagesController::class,'cart'])->name('cart.page');
Route::get('cheackout/page',[PagesController::class,'cheackout'])->name('checkout.page');
// main page route end

// dashboard page route start
Route::get('dashboard/main/page',[PagesController::class,'dashboard_main'])->name('dashboard.main.page');
// dashboard page route end



// catagory route start
Route::get('catagory/page',[Catagory_Controller::class,'view_catagory'])->name('catagory.page'); 
Route::put('store/catagory',[Catagory_Controller::class,'store_catagory'])->name('catagory.store'); 
Route::delete('delete/catagory/{id}',[Catagory_Controller::class,'delete_catagory'])->name('catagory.delete'); 



// catagory route end


// products page route start
Route::get('products/page',[ProductsController::class,'product_page'])->name('product.page');
Route::put('products/store',[ProductsController::class,'store_product'])->name('products.store');
Route::get('products/list/page',[ProductsController::class, 'products_list'])->name('products.list.page');
Route::get('products/edit/page/{id}',[ProductsController::class, 'edit_products'])->name('products.edit.page');
Route::put('products/update/page/{id}',[ProductsController::class, 'update_products'])->name('products.update.page');
Route::delete('products/delete/page/{id}', [ProductsController::class, 'delete_products'])->name('products.delelte.page');




// products page route end

// add to cart route start
Route::get('addtocart/store/{id}', [ProductsController::class, 'addToCartStore'])->name('addtocart.store');
Route::get('addtocart/item/delete/{id}', [ProductsController::class, 'addToCartItemDelete'])->name('addtocart.item.delete');
Route::get('addtocart/clear', [ProductsController::class, 'addToCartClear'])->name('addtocart.clear');

Route::put('cart/quantity/update/{id}',[ProductsController::class,'quantity_update'])->name('quantity.update');


// add to cart route end

    Route::get('/order-confirm/{id}', [OrderController::class, 'confirm'])->name('order.confirm');
    Route::get('order/data',[OrderController::class,'order_data'])->name('order.page');
    Route::get('order/info/{id}', [OrderController::class, 'order_info'])->name('order.info.page');
    Route::delete('order/item/delete/{id}', [OrderController::class, 'destroy'])->name('order.item.delete');
    Route::put('order/status/update/{id}', [OrderController::class, 'updateStatus'])->name('order.status.update');
   



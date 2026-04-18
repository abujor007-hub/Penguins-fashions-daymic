<?php

use App\Http\Controllers\Catagory_Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
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
Route::get('productinfo/page',[PagesController::class,'productinfo'])->name('productinfo.page');
// main page route end

// dashboard page route start
Route::get('dashboard/main/page',[PagesController::class,'dashboard_main'])->name('dashboard.main.page');
// dashboard page route end



// catagory route start
Route::get('catagory/page',[Catagory_Controller::class,'view_catagory'])->name('catagory.page'); 
Route::put('store/catagory',[Catagory_Controller::class,'store_catagory'])->name('catagory.store'); 
Route::delete('delete/catagory/{id}',[Catagory_Controller::class,'delete_catagory'])->name('catagory.delete'); 



// catagory route end
<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// home page router start
Route::get('home/page',[PagesController::class,'home'])->name('home.page');

// home page router end
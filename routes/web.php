<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegistrosController;


Route::get('/',[HomeController::class,'index'])->name('index');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('login.destroy');


Route::get('/home',[HomeController::class,'home'])->middleware('auth')->name('home');
Route::get('/list',[HomeController::class,'list'])->middleware('auth')->name('list');
Route::get('/about',[HomeController::class,'about'])->name('about');

Route::post('/registro', [RegistrosController::class, 'store'])->name('registros.store');
// Route::get('/contact', [HomeController::class,'contact'])->name('contact');

// Route::resource('Lists',ListController::class);


// Route::get('/store', function () {
//     //$category = strip_tags(request('category'));      safe input
//     $category = request('category');
//     if(isset($category)){
//         return 'you are viewing the store for '. strip_tags($category);
//     }
//     return 'you are viewing all instruments';
// });

// Route::get('/list/{category?}', function ($category=null) {
//     if(isset($category)){
//         return "you are viewing the list for {$category}";
//     }
//     return 'you are viewing all list';
// });

// Route::get('/home', function () {
//     return view('welcome');
// });

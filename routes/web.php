<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');

Route::resource('Lists',ListController::class);


Route::get('/store', function () {
    //$category = strip_tags(request('category'));      safe input
    $category = request('category');
    if(isset($category)){
        return 'you are viewing the store for '. strip_tags($category);
    }
    return 'you are viewing all instruments';
});

Route::get('/list/{category?}', function ($category=null) {
    if(isset($category)){
        return "you are viewing the list for {$category}";
    }
    return 'you are viewing all list';
});

Route::get('/home', function () {
    return view('welcome');
});

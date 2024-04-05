<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WeightController;

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

Route::fallback(function () {
    return view('welcome');
});

//Route::view('user','user');

// Route::get('user',function(){
	// return view('user');
// });

Route::get('/user',[UserController::class,'user']);
Route::post('/userinsert',[UserController::class,'userinsert']);
Route::get('/usershow ',[UserController::class,'show']);
Route::get('/edit/{id?}',[UserController::class,'edit']);
Route::post('/userupdate/{id?}',[UserController::class,'userupdate']);
Route::get('/delete/{id?}',[UserController::class,'del']);

Route::get('/home',[HomeController::class,'home']);

Route::controller(CategoryController::class)->group(function(){
	Route::get('/category','category');
	Route::post('/addcategory','addcategory');
	Route::get('/showcategory','showcategory');
	Route::get('/editcat/{id?}','editcat');
	Route::post('/updatecategory','updatecategory');
	Route::get('/delcat/{id?}','delcat');
});

Route::controller(ProductController::class)->group(function(){
	Route::get('/admin/addcakes','addcakes');
	Route::post('/admin/addproduct','addproduct');
	Route::get('/admin/showproduct','showproduct');
	Route::get('/admin/editproduct/{id?}','editproduct');
	Route::post('/admin/updateproduct','updatepro');
});

Route::controller(LoginController::class)->group(function(){
	Route::get('/admin/login','loginPage');
});

Route::controller(WeightController::class)->group(function(){
	Route::get('/admin/weight','weight');
	Route::post('/admin/addweight','addweight');
	Route::get('/admin/showweight','showweight');
	Route::get('/admin/editweight/{id?}','editweight');
	Route::post('/admin/updatedweight','updateweight');
	Route::get('/admin/delweight/{id?}','delweight');
});



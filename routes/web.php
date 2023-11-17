<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\admin\ResourceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Site\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class,'HomePage']);


Route::get('product/{id}', [IndexController::class, 'productdetails'])->name('product-details');

Route::get('cart',[IndexController::class,'CartProduct']);

Route::get('checkout', [IndexController::class,'CheckoutDetails']);

Route::get('add_to_cart', [IndexController::class,'AddProductIntoCart'])->name('add_to_cart');

Route::get('calculate.add_to_cart', [IndexController::class,'CalculateCartItems'])->name('calculate.add_to_cart');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('admin/index', [AdminController::class,'index'])->name('admin');
Route::post('admin/create', [AdminController::class,'Login']);


Route::get('admin/dashboard', [AdminController::class,'dashboard']);

Route::get('admin/products/index', [ResourceController::class,'index']);

Route::get('admin/products/create', [ResourceController::class,'create']);

Route::post('products/store', [ResourceController::class,'store']);

Route::get('admin/products/{id}/edit', [ResourceController::class,'edit']);

Route::patch('products/{id}/update', [ResourceController::class,'update']);

Route::get('products/{id}/delete', [ResourceController::class,'destroy']);


//USERS CRUD ROUTE

Route::get('admin/users/index', [UserController::class,'index']);

Route::get('admin/users/create', [UserController::class,'create']);

Route::post('users/store', [UserController::class,'store']);

Route::get('admin/users/{id}/edit', [UserController::class,'edit']);

Route::patch('users/{id}/update', [UserController::class,'update']);

Route::get('user/{id}/delete', [UserController::class,'destroy']);
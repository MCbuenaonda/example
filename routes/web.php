<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\web\WebController;
use App\Http\Controllers\BusinessController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/list-companies', [WebController::class, 'companies'])->name('list-companies');
Route::get('/product-detail/{product}', [WebController::class, 'product_detail'])->name('product-detail');



Route::get('/home', AdminController ::class)->name('home');
Route::resource('/products', ProductController ::class);
Route::resource('/companies', CompanyController ::class);
Route::resource('/businesses', BusinessController ::class);


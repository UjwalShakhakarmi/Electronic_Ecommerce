<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Home;
use App\Http\Controllers\ProductController;
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

Route::get('/',[Home::class,'index'])->name('home');
Route::get('/about',[Home::class,'about']);
Route::get('/product',[Home::class,'products'])->name('Product-Page');

Route::get('/product-detail/{id}',[Home::class,'product_detail'])->name('product_detail');



Route::get('/adminDashboard',[adminController::class,'index'])->name('Dashboard');
Route::get('/Adminproduct',[adminController::class,'product'])->name('Admin_Product');
Route::get('/Add-AdminProduct',[adminController::class,'Addproduct'])->name('AddProduct');

Route::post('/AddProduct',[ProductController::class,'saveProduct'])->name('save_product');
Route::get('/Product-delete/{id}',[ProductController::class,'Deleteproduct']);
Route::get('product-edit/{id}',[adminController::class,'EditProduct']);
Route::post('Update_product/{id}',[ProductController::class,'UpdateProduct']);


Route::get('/Add-AdminBrand',[adminController::class,'Addbrand'])->name('AddBrand');
Route::post('/AddBrand',[BrandController::class,'saveBrand'])->name('save_Brand');
Route::get('/Delete-Brand/{id}',[BrandController::class,'DeleteBrand']);


Route::get('/Admin-login',[adminController::class,'loginPage'])->name('login');

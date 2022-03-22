<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
});

// Route::get('/product', function () {
//     return view('backend.pages.product');
// });
// Route::get('/Product',function(){
//     return view('backend.pages.product.productList');
// });
//url,controller name,controller method,product name
Route::get('/product',[ProductController::class,'product'])->name('admin.product.show');
Route::get('/product/create',[ProductController::class,'productCreate'])->name('product.create');
Route::post('/product/store',[ProductController::class,'productStore'])->name('product.store');

Route::get('/category',[CategoryController::class,'category'])->name('admin.category.show');
Route::get('/category/form',[CategoryController::class,'categoryForm'])->name('category.form');
Route::post('/category/post',[CategoryController::class,'categoryPost'])->name('category.post');

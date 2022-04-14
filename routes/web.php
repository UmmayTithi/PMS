<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Frontend\FrontendOrderController;

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

//Frontend
Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/customer/registration/form',[HomeController::class,'registrationForm'])->name('registration.form');
Route::post('/customer/registration',[HomeController::class,'registrationFormpost'])->name('customer.registration');
Route::get('/customer/login/form',[HomeController::class,'loginForm'])->name('login.form');
Route::post('/customer/login',[FrontendOrderController::class,'loginFormpost'])->name('customer.login');
Route::get('/product/view/{id}',[FrontendOrderController::class,'showproduct'])->name('product.view');
Route::get('/cart/view',[FrontendOrderController::class,'viewCart'])->name('cart.view');
Route::get('/cart/add{id}',[FrontendOrderController::class,'addToCart'])->name('cart.add');
Route::get('/cart/clear',[FrontendOrderController::class,'clearCart'])->name('cart.clear');


//Backend


Route::get('/login',[UserController::class,'Login'])->name('admin.login');
Route::post('/admin/do-login',[UserController::class,'dologin'])->name('admin.do.login');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

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
Route::get('/product/edit/{id}',[ProductController::class,'productEdit'])->name('product.edit');
Route::put('/product/update',[ProductController::class,'productUpdate'])->name('product.update');
Route::get('/product/delete/{id}',[ProductController::class,'productDelete'])->name('product.delete');

Route::get('/customer',[CustomerController::class,'customer'])->name('admin.customer.show');
Route::get('/customer/form',[CustomerController::class,'customerForm'])->name('customer.form');
Route::post('/customer/post',[CustomerController::class,'customerPost'])->name('customer.post');


Route::get('/stock',[StockController::class,'stock'])->name('admin.stock.show');
Route::get('/stock/form',[StockController::class,'stockForm'])->name('stock.form');
Route::post('/stock/post',[StockController::class,'stockPost'])->name('stock.post');

Route::get('/order',[OrderController::class,'order'])->name('admin.order.show');
Route::get('/order/form',[OrderController::class,'stockForm'])->name('order.form');
Route::post('/order/post',[OrderController::class,'stockPost'])->name('order.post');




});
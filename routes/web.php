<?php

use Illuminate\Support\Facades\Route;

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

//Route Halaman Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('home');
});


//Route Halaman Blog
Route::resource('blog', 'App\Http\Controllers\BlogController');

Route::get('/art', [App\Http\Controllers\BlogController::class, 'art']);
Route::get('/bazar', [App\Http\Controllers\BlogController::class, 'bazar']);
Route::get('/beauty', [App\Http\Controllers\BlogController::class, 'beauty']);
Route::get('/clothes', [App\Http\Controllers\BlogController::class, 'clothes']);
Route::get('/electronic', [App\Http\Controllers\BlogController::class, 'electronic']);
Route::get('/furniture', [App\Http\Controllers\BlogController::class, 'furniture']);
Route::get('/webinar', [App\Http\Controllers\BlogController::class, 'webinar']);

//Route Halaman Blog Detail (Sementara)
Route::get('/blog-detail', [App\Http\Controllers\BlogController::class, 'blogDetail']);


//Route Halaman Store
Route::resource('store', 'App\Http\Controllers\StoreController');

Route::get('/art-store', [App\Http\Controllers\StoreController::class, 'art']);
Route::get('/beauty-store', [App\Http\Controllers\StoreController::class, 'beauty']);
Route::get('/clothes-store', [App\Http\Controllers\StoreController::class, 'clothes']);
Route::get('/electronic-store', [App\Http\Controllers\StoreController::class, 'electronic']);
Route::get('/furniture-store', [App\Http\Controllers\StoreController::class, 'furniture']);
Route::get('/other', [App\Http\Controllers\StoreController::class, 'other']);

//Route Halaman Store Detail (Sementara)
Route::get('/store-detail', [App\Http\Controllers\StoreController::class, 'storeDetail']);


//Route Halaman About Us
Route::get('/aboutus', function () {
    return view('aboutus');
});


//Route Auth
Auth::routes();


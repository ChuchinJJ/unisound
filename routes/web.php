<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SliderController;

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

Route::get('/', [SliderController::class, "index"]);

Route::get('/contact', function () { return view('pages.contact'); });
Route::post('/contact', function () { return view('pages.contact'); });

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/proximo', function () {
    return view('pages.proximo');
});

Route::resource('/shop', ShopController::class);
Route::resource('/product', ProductoController::class);


/*Route::get('/shop', function () {
    return view('pages.shop');
});*/

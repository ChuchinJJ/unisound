<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;

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

Route::get('/contact', [ContactController::class, "index"]);
Route::post('/contact', [ContactController::class, "send"]);

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/proximo', function () {
    return view('pages.proximo');
});

Route::get('/login', function () {
    return view('login.login');
});
Route::get('/login/registrar', function () {
    return view('login.registrar');
});
Route::get('/login/registrar2', function () {
    return view('login.registrar2');
});
Route::get('/login/recuperar', function () {
    return view('login.recuperar');
});


Route::resource('/shop', ShopController::class);
Route::resource('/product', ProductoController::class);


Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/sliders', [SliderController::class, "indexAdmin"]);
Route::get('/admin/addslider', [SliderController::class, "add"]);

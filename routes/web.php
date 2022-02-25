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

Route::get('/', [SliderController::class, "index"])->name("home");

Route::get('contact', [ContactController::class, "index"]);
Route::post('contact', [ContactController::class, "send"]);

Route::get('about', function () {
    return view('pages.about');
});

Route::get('proximo', function () {
    return view('pages.proximo');
});

Route::get('shop', [ShopController::class, 'index']);
Route::post('shop', [ShopController::class, 'index']);
Route::get('shop/{id}', [ShopController::class, 'show']);
Route::post('shop/{id}', [ShopController::class, 'show']);

Route::resource('product', ProductoController::class);

Route::group([
        'middleware' => 'admin', 
        'prefix' => 'admin',
        'namespace' => 'Admin'
    ], function () {   
        Route::get('/', function () {
            return view('admin.dashboard');
        });

        Route::get('sliders', [SliderController::class, "indexAdmin"]);
        Route::get('sliders/{id}', [SliderController::class, "destroy"]);
        Route::get('sliders/{id}/{value}', [SliderController::class, "update"]);
        Route::get('addslider', [SliderController::class, "addView"]);
        Route::post('addslider', [SliderController::class, "upload"]);
        Route::get('addslider/{horizontal}/{vertical}', [SliderController::class, "add"]);
        Route::get('productos', function () {
            return view('admin.productos');
        });
    }
);

require __DIR__.'/auth.php';

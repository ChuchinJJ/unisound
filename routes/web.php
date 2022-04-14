<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\CuponesController;
use App\Http\Controllers\ConfigClienteController;
use App\Http\Controllers\ClientesController;

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

Route::get('email', function () {
    return view('emails.checkout');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('proximo', function () {
    return view('pages.proximo');
});

Route::get('clienteDetalle', function () {
    return view('pages.clienteDetalle');
});

Route::get('admin/clientesDetalles', function () {
    return view('admin.clientesDetalles');
});

Route::get('shop', [ShopController::class, 'index']);
Route::post('shop', [ShopController::class, 'index']);
Route::get('shop/{id}', [ShopController::class, 'show']);
Route::post('shop/{id}', [ShopController::class, 'show']);
Route::get('product/{id}', [ProductoController::class, 'showShop']);
Route::post('cart-add', [CarritoController::class, 'add'])->name('cart.add');
Route::get('cart', [CarritoController::class, 'cart'])->name('cart');
Route::get('cart-removeitem/{id}', [CarritoController::class, 'removeitem']);
Route::post('cart-edit', [CarritoController::class, 'edit']);
Route::post('cupon', [CarritoController::class, 'cupon']);

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
        Route::get('productos', [ProductoController::class, "index"]);
        Route::post('productos', [ProductoController::class, "index"]);
        Route::get('addproducto', [ProductoController::class, "indexAddProducto"]);
        Route::post('addproducto', [ProductoController::class, "addProducto"]);
        Route::get('complete-product', [ProductoController::class, "complete"]);
        Route::get('producto/{id}/edit', [ProductoController::class, "editProducto"]);
        Route::post('producto/{id}/edit', [ProductoController::class, "update"]);
        Route::post('producto/addimage', [ProductoController::class, "addImagen"]);
        Route::get('producto/{id}/delete', [ProductoController::class, "destroy"]);
        Route::get('producto/{id}/restore', [ProductoController::class, "restore"]);
        Route::get('ventas', [VentasController::class, "index"]);
        Route::post('ventas', [VentasController::class, "index"]);
        Route::get('ventas/{id}/detalle', [VentasController::class, "detalle"]);
        Route::get('ventas/{id}/update', [VentasController::class, "edit"]);
        Route::post('ventas/{id}/update', [VentasController::class, "update"]);
        Route::post('ventas/pdf', [VentasController::class, "download"]);
        Route::get('clientes', [ClientesController::class, "index"]);
        Route::get('clientes/{id}/ventas', [ClientesController::class, "datos"]);
        Route::get('notificacion/{id}', [VentasController::class, "notificacion"]);
        Route::get('cupones', [CuponesController::class, "index"]);
        Route::post('cupones', [CuponesController::class, "index"]);
        Route::get('addcupon', [CuponesController::class, "add"]);
        Route::post('addcupon', [CuponesController::class, "create"]);
        Route::get('cupones/{id}/update', [CuponesController::class, "edit"]);
        Route::post('cupones/{id}/update', [CuponesController::class, "update"]);
        Route::get('cupones/{id}/delete', [CuponesController::class, "destroy"]);
        Route::get('cupones/{id}/restore', [CuponesController::class, "restore"]);
    }
);

require __DIR__.'/auth.php';

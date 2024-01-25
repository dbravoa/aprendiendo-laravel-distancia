<?php

use App\Http\Controllers\FacturaController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);

Route::controller(FacturaController::class)->group(function () {

    Route::get('/facturas',  'index')->name('facturas.index');

    Route::get('/facturas/crear',  'create')->name('facturas.create');

    Route::get('facturas/{factura}/edit',  'edit')->name('facturas.edit');

    #Route::get('facturas/anio/{anio?}',  'facturaPorAnio')->name('facturas.facturasPorAnio');

    Route::get('/facturas/{factura}',  'show')->name('facturas.show');

    Route::post('/facturas',  'store')->name('facturas.store');

    Route::put('/facturas/{factura}', 'update')->name('facturas.update');

    Route::delete('facturas/{factura}', 'destroy')->name('facturas.destroy');
});

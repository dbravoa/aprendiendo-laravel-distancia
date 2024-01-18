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

    Route::get('/facturas',  'index');

    Route::get('/facturas/crear',  'create');

    Route::get('facturas/actualizar/{id}',  'update');

    Route::get('facturas/anio/{anio?}',  'facturaPorAnio');

    Route::get('/facturas/{id}',  'show');

    Route::post('/facturas',  'proccess');

    Route::put('/facturas',  'updateAll');

    Route::delete('/facturas',  'deleteAll');
});

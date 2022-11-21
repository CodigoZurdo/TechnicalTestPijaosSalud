<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\IngresosController;
use Illuminate\Support\Facades\Route;

Route::controller(InicioController::class)->group(function () {
    Route::get('/', 'inicio')->name('inicio');
});
Route::controller(HospitalController::class)->group(function () {
    Route::get('/hospital', 'hospital')->name('hospital');
});
Route::controller(PacientesController::class)->group(function () {
    Route::get('/pacientes', 'pacientes')->name('pacientes');
});
Route::controller(IngresosController::class)->group(function () {
    Route::get('/ingresos', 'ingresos')->name('ingresos');
});


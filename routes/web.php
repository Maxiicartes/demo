<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\SuscripcionController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\QRController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/software', [SoftwareController::class, 'index'])->name('software.index');
Route::get('/software/create', [SoftwareController::class, 'create'])->name('software.create');
Route::post('/software', [SoftwareController::class, 'store'])->name('software.store');
Route::get('/software/{id}', [SoftwareController::class, 'show'])->name('software.show');
Route::get('/software/{id}/edit', [SoftwareController::class, 'edit'])->name('software.edit');
Route::put('/software/{id}', [SoftwareController::class, 'update'])->name('software.update');
Route::delete('/software/{id}', [SoftwareController::class, 'destroy'])->name('software.destroy');


Route::get('/revisar-software/{id}', [SoftwareController::class, 'showSoftware'])->name('observador.software.show');


Route::get('/suscripcion', [SuscripcionController::class, 'index'])->name('suscripcion.index');
Route::get('/suscripcion/create', [SuscripcionController::class, 'create'])->name('suscripcion.create');
Route::post('/suscripcion', [SuscripcionController::class, 'store'])->name('suscripcion.store');
Route::get('/suscripcion/{id}', [SuscripcionController::class, 'show'])->name('suscripcion.show');
Route::get('/suscripcion/{id}/edit', [SuscripcionController::class, 'edit'])->name('suscripcion.edit');
Route::put('/suscripcion/{id}', [SuscripcionController::class, 'update'])->name('suscripcion.update');
Route::delete('/suscripcion/{id}', [SuscripcionController::class, 'destroy'])->name('suscripcion.destroy');

Route::get('/revisar-suscripcion/{id}', [SuscripcionController::class, 'showSuscripcion'])->name('observador.suscripcion.show');

Route::get('/mantenimiento', [MantenimientoController::class, 'index'])->name('mantenimiento.index');
Route::get('/mantenimiento/create', [MantenimientoController::class, 'create'])->name('mantenimiento.create');
Route::post('/mantenimiento', [MantenimientoController::class, 'store'])->name('mantenimiento.store');
Route::get('/mantenimiento/{id}', [MantenimientoController::class, 'show'])->name('mantenimiento.show');
Route::get('/mantenimiento/{id}/edit', [MantenimientoController::class, 'edit'])->name('mantenimiento.edit');
Route::put('/mantenimiento/{id}', [MantenimientoController::class, 'update'])->name('mantenimiento.update');
Route::delete('/mantenimiento/{id}', [MantenimientoController::class, 'destroy'])->name('mantenimiento.destroy');

Route::get('/revisar-mantenimiento/{id}', [MantenimientoController::class, 'showMantenimiento'])->name('observador.mantenimiento.show');

Route::get('/qr/{tipo}/{id}', [QRController::class, 'QR'])->name('qr.show');


// pdf routes
Route::get('/pdf/software/{id}', [SoftwareController::class, 'mostrarPDF'])->name('software.pdf');
Route::get('/pdf/suscripcion/{id}', [SuscripcionController::class, 'mostrarPDF'])->name('suscripcion.pdf');
Route::get('/pdf/mantenimiento/{id}', [MantenimientoController::class, 'mostrarPDF'])->name('mantenimiento.pdf');


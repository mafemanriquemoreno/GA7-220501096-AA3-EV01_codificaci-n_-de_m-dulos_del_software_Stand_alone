<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElementoInventarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas del Módulo de Inventario
    Route::get('/inventario', [ElementoInventarioController::class, 'index'])->name('inventario.index');
    Route::get('/inventario/crear', [ElementoInventarioController::class, 'create'])->name('inventario.crear');
    Route::post('/inventario', [ElementoInventarioController::class, 'store'])->name('inventario.store');
});

require __DIR__.'/auth.php';
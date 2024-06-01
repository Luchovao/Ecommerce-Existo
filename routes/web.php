<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// blog. test => welcome
// blog. test/contacto => contac
// blog. test/blog => blog
// blog. test/nosotros => about

Route::view('/','welcome');
Route::view('admin/pages','page');

Route::view('admin/luis-test','luis');

Route::view('admin/cuidado-test','cuidado');
Route::view('admin/settings','perfil');

Route::view('admin/usuarios-test','usuarios');

Route::view('admin/productos-test','productos');

Route::view('admin/informacion-test','informacion');

Route::view('admin/ventas-test','ventas');

Route::view('admin/estadisticas-test','estadisticas');

Route::view('admin/nosotros-test','nosotros');

Route::view('admin/luis-test','luis');













Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

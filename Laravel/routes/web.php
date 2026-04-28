<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// 🔥 AGREGA ESTO
Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return 'Perfil funcionando 🔥';
    })->name('profile.edit');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
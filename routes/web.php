<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MenuMakananController;
use App\Http\Controllers\MenuMinumanController;
use App\Http\Controllers\CartController;



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/password/request', [LoginController::class, 'forgotPassword'])->name('password.request');
Route::get('/menu-makanan', [MenuMakananController::class, 'index'])->name('menu.makanan');
Route::get('/menu-minuman', [MenuMinumanController::class, 'index'])->name('menu.minuman');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/scan-qr', function () {
    return view('auth.scan-qr'); // Make sure this view file exists
})->name('scan.qr');

Route::get('/process-qr', function (Illuminate\Http\Request $request) {
    $data = $request->query('data');
    // Process the scanned QR code data here
    return redirect('/dashboard')->with('success', 'QR Code processed: ' . $data);
});
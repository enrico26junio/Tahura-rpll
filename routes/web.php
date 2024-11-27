<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MenuMakananController;
use App\Http\Controllers\MenuMinumanController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/password/request', [LoginController::class, 'forgotPassword'])->name('password.request');
Route::get('/menu-makanan', [MenuMakananController::class, 'index'])->name('menu.makanan');
Route::get('/menu-minuman', [MenuMinumanController::class, 'index'])->name('menu.minuman');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::get('/cart/remove/{menuId}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/scan-qr', function () {
    return view('auth.scan-qr'); // Make sure this view file exists
})->name('scan.qr');

Route::get('/process-qr', function (Illuminate\Http\Request $request) {
    $data = $request->query('data');
    // Process the scanned QR code data here
    return redirect('/dashboard')->with('success', 'QR Code processed: ' . $data);
});
Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('process.payment');
Route::get('/payment-success', [PaymentController::class, 'successPage'])->name('success.page');;


Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::post('/orders/confirm/{id}', [OrderController::class, 'confirm'])->name('orders.confirm');
Route::post('/orders/cancel/{id}', [OrderController::class, 'cancel'])->name('orders.cancel');


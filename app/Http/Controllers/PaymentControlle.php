<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        // Validasi input metode pembayaran
        $request->validate([
            'payment_method' => 'required|in:transfer,qris,cash',
        ]);

        // Simpan data pembayaran (opsional)
        $paymentMethod = $request->input('payment_method');
        $cart = Session::get('cart', []); // Ambil data cart dari session
        $totalPrice = array_sum(array_column($cart, 'total_price'));

        // Simpan data pembayaran di session (atau database)
        Session::put('payment', [
            'method' => $paymentMethod,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        // Redirect ke halaman sukses
        return redirect()->route('success.page')->with('status', 'Pembayaran berhasil menggunakan metode: ' . ucfirst($paymentMethod));
    }

    public function successPage()
    {
        // Ambil data pembayaran dari session
        $payment = Session::get('payment', null);

        if (!$payment) {
            return redirect()->route('home')->with('error', 'Tidak ada transaksi pembayaran ditemukan.');
        }

        return view('payment.success', compact('payment'));
    }
}

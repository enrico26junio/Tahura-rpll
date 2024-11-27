<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Tampilkan daftar pesanan
    public function index()
    {
        $orders = Order::where('status', 'pending')->get(); // Hanya pesanan pending
        return view('orders.index', compact('orders'));
    }

    // Konfirmasi pembayaran
    public function confirm($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'confirmed'; // Ubah status menjadi confirmed
        $order->save();

        return redirect()->route('orders.index')->with('status', 'Pembayaran berhasil dikonfirmasi!');
    }

    // Batalkan pesanan
    public function cancel($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'canceled'; // Ubah status menjadi canceled
        $order->save();

        return redirect()->route('orders.index')->with('status', 'Pesanan berhasil dibatalkan!');
    }
}

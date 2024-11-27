<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique(); // Nomor pesanan
            $table->string('customer_name'); // Nama pelanggan
            $table->string('payment_method'); // Metode pembayaran
            $table->decimal('total_price', 15, 2); // Total harga
            $table->enum('status', ['pending', 'confirmed', 'canceled'])->default('pending'); // Status pesanan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

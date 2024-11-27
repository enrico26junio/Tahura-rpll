<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::create([
            'order_number' => 'ORD001',
            'customer_name' => 'John Doe',
            'payment_method' => 'transfer',
            'total_price' => 50000,
            'status' => 'pending',
        ]);

        Order::create([
            'order_number' => 'ORD002',
            'customer_name' => 'Jane Doe',
            'payment_method' => 'qris',
            'total_price' => 75000,
            'status' => 'pending',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Update or create the user
        User::updateOrCreate(
            ['email' => 'hansel@example.com'], // Condition to check if the user exists
            [
                'name' => 'Hansel',
                'username' => 'hansel',
                'email' => 'hansel@example.com',
                'password' => bcrypt('hansel123'), // Hash the password
            ]
        );
    }
}

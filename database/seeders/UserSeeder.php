<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('admin');

        $user_purchase = User::create([
            'name' => 'user_purchase',
            'email' => 'user_purchase@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user_purchase->assignRole('user_purchase');
        
        $user_stok = User::create([
            'name' => 'user_stok',
            'email' => 'user_stok@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user_stok->assignRole('user_stok');
    }
}

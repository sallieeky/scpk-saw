<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('admin123'),
        ]);
        User::create([
            'email' => 'sallieeky@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'challisya@gmail.com',
            'role' => 'user',
            'password' => bcrypt('ais12345'),
        ]);
    }
}

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
        User::create([
            'email' => 'user1@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user2@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user3@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user4@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user5@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user6@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user7@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user8@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user9@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user10@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user11@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user12@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user13@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user14@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user15@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user16@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user17@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user18@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user19@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
        User::create([
            'email' => 'user20@gmail.com',
            'role' => 'user',
            'password' => bcrypt('eky12345'),
        ]);
    }
}

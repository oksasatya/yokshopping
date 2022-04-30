<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Example Seller',
            'email' => 'seller@example.com',
            'username' => 'seller',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password,
            'roles' => 'seller'
        ]);


        DB::table('users')->insert([
            'name' => 'Example User',
            'email' => 'user@example.com',
            'username' => 'user',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password,
            'roles' => 'user'
        ]);
    }
}

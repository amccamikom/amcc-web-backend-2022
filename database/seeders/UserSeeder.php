<?php

namespace Database\Seeders;

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
        // Melakukan insert data ke tabel users
        DB::table('users')->insert([
            'username' => 'example',
            'name' => 'Name Example',
            'email' => 'example@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}

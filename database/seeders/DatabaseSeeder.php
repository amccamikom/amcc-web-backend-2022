<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Memanggil file seeder lainnya
        $this->call([
            UserSeeder::class,
            QuestionSeeder::class
        ]);
    }
}

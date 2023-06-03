<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Melakukan insert data ke tabel questions
        DB::table('questions')->insert([
            'username' => 'example',
            'title' => 'Coba title 1',
            'content' => \Str::random(300)
        ]);

        DB::table('questions')->insert([
            'username' => 'example',
            'title' => 'Coba title 2',
            'content' => \Str::random(300)
        ]);
    }
}

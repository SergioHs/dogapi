<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \DB::table('dogs')->insert([
             'raca' => 'Labrator',
             'nome' => 'Puppy',
             'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}

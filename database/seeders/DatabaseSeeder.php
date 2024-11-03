<?php

namespace Database\Seeders;

use App\Models\Movies;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    //Aqui se declara cual seeder se utilizara
    public function run(): void
    {
        $this->call([
            MoviesSeeder::class
        ]);
    }
}

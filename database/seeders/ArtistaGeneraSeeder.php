<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\artista_genera;

class ArtistaGeneraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        artista_genera::updateOrCreate(
            [
                'artista_id' => 1,
                'genera_id' => 1
            ]
        );
    }
}

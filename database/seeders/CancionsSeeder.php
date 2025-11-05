<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cancion;

class CancionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cancion::updateOrCreate(
            [
                'nom' => 'MÓNACO',
                'durada' => 215,
                'views' => 1000000,
                'tipus' => 'Original',
                'genera_id' => 1,
                'album_id' => 1

            ]
        );
    }
}

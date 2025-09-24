<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    public function run(): void
    {
        Artist::updateOrCreate(
            [
                'nom' => 'Benito Antonio',
                'cognom' => 'Martinez Ocasio', 
                'nomArtistic' => 'Bad Bunny',
                'nacionalitat' => 'Puerto Rico',
                'idiomaPredominat' => 'Español',
                'dataNaixement' => '2025-09-24',
                'seguidors' => 100000000
            ]
        );
    }
}

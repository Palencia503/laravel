<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    public function run(): void
    {
        Album::updateOrCreate(
            [
                'nom' => 'Original',
                'quantitat' => 5, 
                'data' => '2025-10-01'
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\artista_album;

class artista_albumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        artista_album::updateOrCreate(
            [
                'artista_id' => 1,
                'album_id' => 1
            ]
        );
    }
}

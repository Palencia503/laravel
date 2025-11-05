<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Llistes;

class LlistesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Llistes::updateOrCreate(
            [
                'usuari_id' => 1,
                'nom' => 'Mi lista', 
                'descripcio' => 'Musicas que me gustan',
                'dataCreacio' => '2025-10-07',
                'publica' => false
            ]
        );
    }
}

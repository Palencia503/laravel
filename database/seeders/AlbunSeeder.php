<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Idioma::updateOrCreate(
            [
                'nom' => 'mix',
                'quantiat' => '5',
                'data' => '25-09-2025'
            ]
        );
    }
}

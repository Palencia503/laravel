<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuari;


class UsuariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Usuari::updateOrCreate(
            [
                'nom' => 'Jose Geovanni',
                'cognom' => 'Palencia Palacios', 
                'pais' => 'Spain',
                'email' => 'jgpalencia503@gmail.com',
                'dataNaixement' => '2005-12-19',
                'password' => bcrypt('Jose123'),
                'seguidors' => 1
            ]
        );
    }
}

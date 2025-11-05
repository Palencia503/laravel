<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cançons_llistes;

class CançonsLlistesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Cançons_llistes::updateOrCreate(
            [
                'llistes_id' => 1,
                'cancions_id' => 1
            ]
        );
    }
}

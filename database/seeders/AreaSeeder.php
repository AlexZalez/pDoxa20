<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create(
            ['name' => 'Area de Ingenieria en Sistemas', 'user_id' => 1]
        );
        Area::create(
            ['name' => 'Area de Ciencias Economicas', 'user_id' => null]
        );
        Area::create(
            ['name' => 'Area de Ciencias de la Salud', 'user_id' => null]
        );
    }
}

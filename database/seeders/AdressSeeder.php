<?php

namespace Database\Seeders;

use App\Models\Adress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Adress::create(
            ['name' => 'Estudios Basicos', 'area_id' => 1]
        );
        Adress::create(
            ['name' => 'Ingenieria en Informatica', 'area_id' => 1]
        );
        Adress::create(
            ['name' => 'Economia', 'area_id' => 2]
        );
    }
}

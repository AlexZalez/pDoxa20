<?php

namespace Database\Seeders;

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
        DB::table('adresses')->insert([
            ['name' => 'Estudios Basicos'],
            ['name' => 'Ingenieria en Informatica'],
            ['name' => 'Economia'],
            ['name' => 'Estudios Basicos']
        ]);
    }
}

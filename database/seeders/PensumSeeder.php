<?php

namespace Database\Seeders;

use App\Models\Pensum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PensumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pensum::create(
            ['name' => 'Intensivo(inf)', 'creation_date' => '2013-07-24', 'regime' => 'Semestre', 'career_id' => 1]
        );
        Pensum::create(
            ['name' => 'Regular(inf)', 'creation_date' => '2013-09-16', 'regime' => 'Semestre', 'career_id' => 1]
        );
    }
}

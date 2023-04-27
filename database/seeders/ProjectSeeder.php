<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' => 'Horarios Informatica 2016-1', 
            'pensum_id' => 2,
            'academic_period' => '2016-1',
            'date' => '2016-03-28',
            'date_memo' => '2016-03-14',
            'observations' => 'materias agregadas'
        ]);
    }
}

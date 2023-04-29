<?php

namespace Database\Seeders;

use App\Models\Departament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departament::create([
            'name' => "Estudios Generales",
            'adress_id' =>	null,
            'teacher_id' => null,
            'avr' => "DEG"    
        ]);
        Departament::create([
            'name' => "Ciencias Basicas",
            'adress_id' =>	null,
            'teacher_id' => null,
            'avr' => "DCB"    
        ]);
        Departament::create([
            'name' => "Ciencias de la Computación",
            'adress_id' =>	null,
            'teacher_id' => null,
            'avr' => "DCC"    
        ]);
        Departament::create([
            'name' => "Formación Profesional",
            'adress_id' =>	null,
            'teacher_id' => null,
            'avr' => "DFP"    
        ]);
        Departament::create([
            'name' => "Cs Basicas",
            'adress_id' =>	null,
            'teacher_id' => null,
            'avr' => "DEG"    
        ]);

    }
}

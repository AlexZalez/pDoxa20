<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'CI' => '28544285',
            'name' => 'Alexis',
            'lastname' => 'Gonzalez',
            'area_id' => 1,
            'phone' => '04127609320',
            'home_phone' => '',
            'email' => 'alberto@email.com',
            'adress' => 'Las Mercedes, Calle San Luis',
            'state_id' => 1,
            'municipy_id' => 1,
        ]);
    }
}

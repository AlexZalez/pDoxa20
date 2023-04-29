<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shift::create([
            'name' => 'Mañana'
        ]);
        Shift::create([
            'name' => 'Tarde'
        ]);
        Shift::create([
            'name' => 'Noche'
        ]);
    }
}

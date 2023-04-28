<?php

namespace Database\Seeders;

use App\Models\Municipy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipy::create([
            'name' => 'Zamora',
        ]);
    }
}

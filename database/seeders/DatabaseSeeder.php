<?php

namespace Database\Seeders;

use App\Models\Departament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AreaSeeder::class,
            AdressSeeder::class,
            CareerSeeder::class,
            PensumSeeder::class,
            StateSeeder::class,
            MunicipySeeder::class,
            TeacherSeeder::class,
            CardSeeder::class,
            DepartamentSeeder::class,
            SubjectSeeder::class,
            ShiftSeeder::class,
            SectionSeeder::class,
            TeacherSectionSeeder::class,
            ClassroomTypeSeeder::class,
            MeetingSeeder::class,
            MeetingSectionSeeder::class,
            AttendanceSeeder::class,
            SchemeHourSeeder::class,
            HourSeeder::class,
            ShiftHourSeeder::class,
            SchemeDaySeeder::class,
            DaySeeder::class,
            UbicationSeeder::class,
            ClassroomSeeder::class,
            BlockSeeder::class,
        ]);
    }
}

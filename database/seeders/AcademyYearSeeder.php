<?php

namespace Database\Seeders;

use App\Models\AcademyYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademyYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $academy_year = AcademyYear::firstOrCreate(
            ['id' => 1], [
                'school_id'  => 1,
                'start_year' => date('Y'),
                'stop_year'  => date('Y') + 1,
            ]);
        $academy_year->school->academy_year_id = $academy_year->id;
        $academy_year->save();
    }
}

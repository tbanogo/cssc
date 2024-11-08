<?php

namespace Database\Seeders;

use App\Models\Trimester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrimesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trimester = Trimester::firstOrCreate([
            'id'                   => 1,
        ], [
            'name'             => 'Trimestre 1',
            'academy_year_id' => 1,
            'school_id'        => 1,
        ]);
        $trimester->school->trimester_id = $trimester->id;
        $trimester->school->save();
    }
}

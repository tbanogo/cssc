<?php

namespace Database\Seeders;

use App\Models\ClassGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassGroup::firstOrCreate([
            "id"        => 1,
            "name"      => "Primaire",
            "school_id" => 1
        ]);

        ClassGroup::firstOrCreate([
            "id"        => 2,
            "name"      => "Secondaire",
            "school_id" => 1
        ]);
    }
}

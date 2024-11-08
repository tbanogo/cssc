<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::firstOrCreate([
            "id"             => 1,
            "name"           => "A",
            "my_class_id"    => 1
        ]);

        Section::firstOrCreate([
            "id"             => 2,
            "name"           => "A",
            "my_class_id"    => 2
        ]);

        Section::firstOrCreate([
            "id"             => 3,
            "name"           => "B",
            "my_class_id"    => 2
        ]);
    }
}

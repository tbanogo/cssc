<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::updateOrCreate(
            ["id" => 1],
            [
                "name"     => "Complexe scolaire somdé de kosoghin",
                "address"  => "Enseignement général",
                "code"     => Str::random(10),
                "initials" => "LPCSSK"
            ]
        );
    }
}

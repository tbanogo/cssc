<?php

namespace Database\Seeders;

use App\Models\MyClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MyClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MyClass::firstOrCreate([
            "id"             => 1,
            "name"           => "CP1",
            "class_group_id" => 1
        ]);

        MyClass::firstOrCreate([
            "id"             => 2,
            "name"           => "6 ième",
            "class_group_id" => 2
        ]);
    }
}

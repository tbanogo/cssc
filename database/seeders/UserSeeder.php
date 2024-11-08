<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();

        $superAdmin = User::firstOrCreate([
            'id'                => 1,
            'name'              => 'John Doe',
            'email'             => 'super@admin.com',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'address'           => 'super admin street',
            'birthday'          => '22/04/04',
            'nationality'       => 'nigeria',
            'state'             => 'lagos',
            'city'              => 'lagos',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',
        ]);

        $superAdmin->assignRole('super-admin');
        $superAdmin->save();

        $admin = User::firstOrCreate([
            'id'                => 2,
            'name'              => 'Jane Doe',
            'email'             => 'admin@admin.com',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'address'           => 'admin street',
            'birthday'          => '22/04/04',
            'nationality'       => 'nigeria',
            'state'             => 'lagos',
            'city'              => 'lagos',
            'blood_group'       => 'B+',
            'email_verified_at' => now(),
            'gender'            => 'male',

        ]);

        $admin->assignRole('admin');
    }
}

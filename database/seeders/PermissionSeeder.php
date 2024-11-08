<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* ############################## = COMMONS = ############################## */

        // Permission for school
        Permission::firstOrCreate(["name" => "create school"]);
        Permission::firstOrCreate(["name" => "read school"]);
        Permission::firstOrCreate(["name" => "update school"]);
        Permission::firstOrCreate(["name" => "delete school"]);
        Permission::firstOrCreate(["name" => "manage school settings"]);

        // Permission for class group
        Permission::firstOrCreate(["name" => "create class group"]);
        Permission::firstOrCreate(["name" => "read class group"]);
        Permission::firstOrCreate(["name" => "update class group"]);
        Permission::firstOrCreate(["name" => "delete class group"]);

        // Permission for class
        Permission::firstOrCreate(["name" => "create class"]);
        Permission::firstOrCreate(["name" => "read class"]);
        Permission::firstOrCreate(["name" => "update class"]);
        Permission::firstOrCreate(["name" => "delete class"]);

        // Permission for section
        Permission::firstOrCreate(["name" => "create section"]);
        Permission::firstOrCreate(["name" => "read section"]);
        Permission::firstOrCreate(["name" => "update section"]);
        Permission::firstOrCreate(["name" => "delete section"]);

        // Permission for academy year
        Permission::firstOrCreate(["name" => "create academy year"]);
        Permission::firstOrCreate(["name" => "read academy year"]);
        Permission::firstOrCreate(["name" => "update academy year"]);
        Permission::firstOrCreate(["name" => "delete academy year"]);

        // Permission for trimester
        Permission::firstOrCreate(["name" => "create trimester"]);
        Permission::firstOrCreate(["name" => "read trimester"]);
        Permission::firstOrCreate(["name" => "update trimester"]);
        Permission::firstOrCreate(["name" => "delete trimester"]);

        // Permission for teacher
        Permission::firstOrCreate(["name" => "create teacher"]);
        Permission::firstOrCreate(["name" => "read teacher"]);
        Permission::firstOrCreate(["name" => "update teacher"]);
        Permission::firstOrCreate(["name" => "delete teacher"]);

        // Permission for parent
        Permission::firstOrCreate(["name" => "create parent"]);
        Permission::firstOrCreate(["name" => "read parent"]);
        Permission::firstOrCreate(["name" => "update parent"]);
        Permission::firstOrCreate(["name" => "delete parent"]);

        /* ############################## = HEADERS = ############################## */

        Permission::firstOrCreate(["name" => "header-administrate"]);
        Permission::firstOrCreate(["name" => "header-schools"]);
        Permission::firstOrCreate(["name" => "header-academics"]);

        /* ############################## = MENUS = ############################## */
        Permission::firstOrCreate(["name" => "menu-class"]);
        Permission::firstOrCreate(["name" => "menu-section"]);
        Permission::firstOrCreate(["name" => "menu-teacher"]);
        Permission::firstOrCreate(["name" => "menu-parent"]);
        Permission::firstOrCreate(["name" => "menu-academy-year"]);
        Permission::firstOrCreate(["name" => "menu-trimester"]);
        
        /* ############################## = ASSIGMENT = ############################## */
        $admin = Role::where("name", "admin")->first();
        $admin->syncPermissions([
            "header-administrate",
            "header-academics",
            "menu-class",
            "menu-section",
            "menu-teacher",
            "menu-parent",
            "menu-academy-year",
            "menu-trimester",
            "create school",
            "read school",
            "update school",
            "delete school",
            "manage school settings",
            "create class group",
            "read class group",
            "update class group",
            "delete class group",
            "create class",
            "read class",
            "update class",
            "delete class",
            "create section",
            "read section",
            "update section",
            "delete section",
            "create academy year",
            "read academy year",
            "update academy year",
            "delete academy year",
            "create trimester",
            "read trimester",
            "update trimester",
            "delete trimester",
            "create teacher",
            "read teacher",
            "update teacher",
            "delete teacher",
            "create parent",
            "read parent",
            "update parent",
            "delete parent"
        ]);
    }
}

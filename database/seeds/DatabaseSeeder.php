<?php

namespace Database\Seeders;
use Database\seeds\RoleUserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            RolesSeeder::class,
            UsersSeeder::class,
            RoleUserSeeder::class,
            PermissionRoleSeeder::class,
            WeekdaysSeeder::class,
            StudyProgramsSeeder::class,
            SessionsSeeder::class,
            CoursesSeeder::class,
            SchoolClassesSeeder::class,
            RoomsSeeder::class,
        ]);
    }
}
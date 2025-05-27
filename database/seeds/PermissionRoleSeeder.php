<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('permission_role')->insert([
            [
                'role_id' => 1, // Admin
                'permission_id' => 1,
            ],
            [
                'role_id' => 1, // Admin
                'permission_id' => 2,
            ],
            [
                'role_id' => 1, // Admin
                'permission_id' => 3,
            ],
            [
                'role_id' => 1, // Admin
                'permission_id' => 4,
            ],
            [
                'role_id' => 2, // BAA
                'permission_id' => 5,
            ],
            [
                'role_id' => 2, // BAA
                'permission_id' => 6,
            ],
            [
                'role_id' => 3, // Teacher
                'permission_id' => 7,
            ],
            [
                'role_id' => 4, // Teaching Assistant
                'permission_id' => 8,
            ],
            [
                'role_id' => 5, // Student
                'permission_id' => 9,
            ],
            [
                'role_id' => 6, // Head of Study Program
                'permission_id' => 10,
            ],
        ]);
    }
}
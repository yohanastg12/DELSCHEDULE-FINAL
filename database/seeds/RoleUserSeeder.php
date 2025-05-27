<?php
namespace Database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('role_user')->insert([
            [
                'user_id' => 1,
                'role_id' => 1, // Admin
            ],
            [
                'user_id' => 2,
                'role_id' => 2, // BAA
            ],
            [
                'user_id' => 3,
                'role_id' => 3, // Teacher
            ],
            [
                'user_id' => 4,
                'role_id' => 4, // Teaching Assistant
            ],
            [
                'user_id' => 5,
                'role_id' => 5, // Student
            ],
            [
                'user_id' => 6,
                'role_id' => 6, // Head of Study Program
            ],
            [
                'user_id' => 7,
                'role_id' => 5, // Student
            ],
            [
                'user_id' => 8,
                'role_id' => 5, // Student
            ],
            [
                'user_id' => 9,
                'role_id' => 3, // Teacher
            ],
        ]);
    }
}
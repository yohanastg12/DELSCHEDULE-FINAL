<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'remember_token' => null,
                'created_at' => '2025-04-16 21:26:33',
                'updated_at' => '2025-04-16 21:26:33',
                'deleted_at' => null,
                'class_id' => null,
            ],
            [
                'id' => 2,
                'name' => 'BAA',
                'email' => 'baa@example.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'remember_token' => null,
                'created_at' => '2025-04-16 21:26:33',
                'updated_at' => '2025-04-16 21:26:33',
                'deleted_at' => null,
                'class_id' => null,
            ],
            [
                'id' => 3,
                'name' => 'Teacher',
                'email' => 'teacher@example.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'remember_token' => null,
                'created_at' => '2025-04-16 21:26:33',
                'updated_at' => '2025-04-16 21:26:33',
                'deleted_at' => null,
                'class_id' => null,
            ],
            [
                'id' => 4,
                'name' => 'Teaching Assistant',
                'email' => 'ta@example.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'remember_token' => null,
                'created_at' => '2025-04-16 21:26:33',
                'updated_at' => '2025-04-16 21:26:33',
                'deleted_at' => null,
                'class_id' => null,
            ],
            [
                'id' => 5,
                'name' => 'Student',
                'email' => 'student@example.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'remember_token' => null,
                'created_at' => '2025-04-16 21:26:33',
                'updated_at' => '2025-04-16 21:26:33',
                'deleted_at' => null,
                'class_id' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Head of Study Program',
                'email' => 'head@example.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'remember_token' => null,
                'created_at' => '2025-04-16 21:26:33',
                'updated_at' => '2025-04-16 21:26:33',
                'deleted_at' => null,
                'class_id' => null,
            ],
            [
                'id' => 7,
                'name' => 'Test',
                'email' => 'test@example.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'remember_token' => null,
                'created_at' => '2025-04-16 21:31:41',
                'updated_at' => '2025-04-16 21:31:41',
                'deleted_at' => null,
                'class_id' => 3,
            ],
            [
                'id' => 8,
                'name' => 'Test2',
                'email' => 'test2@example.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'remember_token' => null,
                'created_at' => '2025-04-16 21:35:09',
                'updated_at' => '2025-04-16 21:35:09',
                'deleted_at' => null,
                'class_id' => 4,
            ],
            [
                'id' => 9,
                'name' => 'Agnes',
                'email' => 'agnes@example.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'remember_token' => null,
                'created_at' => '2025-05-04 07:59:46',
                'updated_at' => '2025-05-04 07:59:46',
                'deleted_at' => null,
                'class_id' => null,
            ],
        ]);
    }
}
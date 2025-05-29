<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'title' => 'Admin',
                'created_at' => '2025-04-16 21:26:33',
                'updated_at' => '2025-04-16 21:26:33',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'BAA',
                'created_at' => '2025-04-16 21:26:33',
                'updated_at' => '2025-04-16 21:26:33',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'Lecturer',
                'created_at' => '2025-04-16 21:26:33',
                'updated_at' => '2025-04-16 21:26:33',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'title' => 'Student',
                'created_at' => '2025-04-16 21:26:33',
                'updated_at' => '2025-04-16 21:26:33',
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'title' => 'Teaching Assistant',
                'created_at' => '2025-04-16 21:26:33',
                'updated_at' => '2025-04-16 21:26:33',
                'deleted_at' => null,
            ],

        ]);
    }
}
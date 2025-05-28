<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sessions = [
            [
                'id' => 1,
                'start_time' => '08:00',
                'end_time' => '08:50',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'start_time' => '09:00',
                'end_time' => '09:50',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'start_time' => '10:00',
                'end_time' => '10:50',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'start_time' => '11:00',
                'end_time' => '11:50',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'start_time' => '12:00',
                'end_time' => '12:50',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                'start_time' => '13:00',
                'end_time' => '13:50',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 7,
                'start_time' => '14:00',
                'end_time' => '14:50',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 8,
                'start_time' => '15:00',
                'end_time' => '15:50',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 9,
                'start_time' => '16:00',
                'end_time' => '16:50',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => 10,
                'start_time' => '17:00',
                'end_time' => '17:50',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
        ];

        DB::table('sessions')->insert($sessions);
    }
}

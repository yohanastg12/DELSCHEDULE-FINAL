<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeekdaysSeeder extends Seeder
{

    public function run()
    {
        $weekdays = [
            ['id' => 1, 'name' => 'Senin', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['id' => 2, 'name' => 'Selasa', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['id' => 3, 'name' => 'Rabu', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['id' => 4, 'name' => 'Kamis', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['id' => 5, 'name' => 'Jumat', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
        ];

        DB::table('weekday')->insert($weekdays);
    }
}
 
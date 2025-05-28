<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $StudyPrograms = [
            [
                'id'    => 1,
                'name' => 'S1 Informatika',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 2,
                'name' => 'S1 Sistem Informasi',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 3,
                'name' => 'S1 Teknik Elektro',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 4,
                'name' => 'D4 Teknologi Rekayasa Perangkat Lunak',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 5,
                'name' => 'S1 Teknik Bioproses',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 6,
                'name' => 'S1 Manajemen Rekayasa',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 7,
                'name' => 'D3 Teknologi Informasi',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 8,
                'name' => 'D3 Teknologi Komputer',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 9,
                'name' => 'S1 Teknik Metalurgi',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            
        ];

        DB::table('study_program')->insert($StudyPrograms);
    }
}

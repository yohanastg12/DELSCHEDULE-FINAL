<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SchoolClasses = [
            [
                'id'    => 1,
                'name' => '11SI',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                
            ],
            [
                'id'    => 2,
                'name' => '12SI',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 3,
                'name' => '13SI',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 4,
                'name' => '14SI',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 5,
                'name' => '11TE',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 6,
                'name' => '12TE',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 7,
                'name' => '13TE',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 8,
                'name' => '14TE',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 9,
                'name' => '31TI',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 10,
                'name' => '32TI',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 11,
                'name' => '33TI',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 12,
                'name' => '11MR',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 13,
                'name' => '12MR',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 14,
                'name' => '13MR',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 15,
                'name' => '14MR',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 16,
                'name' => '11TM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 17,
                'name' => '12TM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 18,
                'name' => '13TM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 19,
                'name' => '14TM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 20,
                'name' => '31TK',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 21,
                'name' => '32TK',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 22,
                'name' => '33TK',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 23,
                'name' => '11TB',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 24,
                'name' => '12TB',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 25,
                'name' => '13TB',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 26,
                'name' => '14TB',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 27,
                'name' => '41TRPL',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 28,
                'name' => '42TRPL',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 29,
                'name' => '43TRPL',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id'    => 30,
                'name' => '44TRPL',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
        ];
        DB::table('school_classes')->insert($SchoolClasses);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            ['id' => 1, 'title' => 'user_management_access', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 2, 'title' => 'permission_create', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 3, 'title' => 'permission_edit', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 4, 'title' => 'permission_show', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 5, 'title' => 'permission_delete', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 6, 'title' => 'permission_access', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 7, 'title' => 'role_create', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 8, 'title' => 'role_edit', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 9, 'title' => 'role_show', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 10, 'title' => 'role_delete', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 11, 'title' => 'role_access', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 12, 'title' => 'user_create', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 13, 'title' => 'user_edit', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 14, 'title' => 'user_show', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 15, 'title' => 'user_delete', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 16, 'title' => 'user_access', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 17, 'title' => 'lesson_create', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 18, 'title' => 'lesson_edit', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 19, 'title' => 'lesson_show', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 20, 'title' => 'lesson_delete', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 21, 'title' => 'lesson_access', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 22, 'title' => 'school_class_create', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 23, 'title' => 'school_class_edit', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 24, 'title' => 'school_class_show', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 25, 'title' => 'school_class_delete', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 26, 'title' => 'school_class_access', 'created_at' => null, 'updated_at' => null, 'deleted_at' => null],
            ['id' => 27, 'title' => 'course_access', 'created_at' => '2025-05-02 18:13:47', 'updated_at' => '2025-05-02 18:13:47', 'deleted_at' => null],
            ['id' => 28, 'title' => 'course_show', 'created_at' => '2025-05-02 18:43:15', 'updated_at' => '2025-05-02 18:43:15', 'deleted_at' => null],
            ['id' => 29, 'title' => 'course_edit', 'created_at' => '2025-05-02 18:43:19', 'updated_at' => '2025-05-02 18:43:19', 'deleted_at' => null],
            ['id' => 30, 'title' => 'course_delete', 'created_at' => '2025-05-02 18:43:24', 'updated_at' => '2025-05-02 18:43:24', 'deleted_at' => null],
            ['id' => 31, 'title' => 'course_create', 'created_at' => '2025-05-02 19:10:18', 'updated_at' => '2025-05-02 19:10:18', 'deleted_at' => null],
            ['id' => 32, 'title' => 'study_program_access', 'created_at' => '2025-05-03 13:19:13', 'updated_at' => '2025-05-03 13:19:13', 'deleted_at' => null],
            ['id' => 33, 'title' => 'study_program_show', 'created_at' => '2025-05-03 13:19:15', 'updated_at' => '2025-05-03 13:19:15', 'deleted_at' => null],
            ['id' => 34, 'title' => 'study_program_edit', 'created_at' => '2025-05-03 13:19:16', 'updated_at' => '2025-05-03 13:19:16', 'deleted_at' => null],
            ['id' => 35, 'title' => 'study_program_delete', 'created_at' => '2025-05-03 13:19:17', 'updated_at' => '2025-05-03 13:19:17', 'deleted_at' => null],
            ['id' => 36, 'title' => 'study_program_create', 'created_at' => '2025-05-03 13:19:18', 'updated_at' => '2025-05-03 13:19:18', 'deleted_at' => null],
            ['id' => 37, 'title' => 'room_access', 'created_at' => '2025-05-04 15:43:41', 'updated_at' => '2025-05-04 15:43:41', 'deleted_at' => null],
            ['id' => 38, 'title' => 'room_show', 'created_at' => '2025-05-04 15:43:42', 'updated_at' => '2025-05-04 15:43:42', 'deleted_at' => null],
            ['id' => 39, 'title' => 'room_edit', 'created_at' => '2025-05-04 15:43:43', 'updated_at' => '2025-05-04 15:43:43', 'deleted_at' => null],
            ['id' => 40, 'title' => 'room_delete', 'created_at' => '2025-05-04 15:43:44', 'updated_at' => '2025-05-04 15:43:44', 'deleted_at' => null],
            ['id' => 41, 'title' => 'room_create', 'created_at' => '2025-05-04 15:43:44', 'updated_at' => '2025-05-04 15:43:44', 'deleted_at' => null],
            ['id' => 42, 'title' => 'room_create', 'created_at' => '2025-05-21 21:25:22', 'updated_at' => '2025-05-21 21:25:22', 'deleted_at' => null],
            ['id' => 43, 'title' => 'ticketing_approval', 'created_at' => '2025-05-22 03:28:49', 'updated_at' => '2025-05-22 03:28:49', 'deleted_at' => null],
            ['id' => 44, 'title' => 'ticketing_create', 'created_at' => '2025-05-27 13:13:06', 'updated_at' => '2025-05-27 13:13:06', 'deleted_at' => null],
        ];

        foreach ($permissions as $permission) {
            DB::table('permissions')->insert(
                [
                    'id' => $permission['id'],
                    'title' => $permission['title'],
                    'created_at' => $permission['created_at'],
                    'updated_at' => $permission['updated_at'],
                    'deleted_at' => $permission['deleted_at'],
                ]
            );
        }
    }
}
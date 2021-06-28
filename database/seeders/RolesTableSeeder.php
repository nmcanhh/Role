<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'admin', 'display_name' => 'Quản trị viên', 'created_at'=>now(),],
            ['id' => 2, 'name' => 'content', 'display_name' => 'Content', 'created_at'=>now(),],
            ['id' => 3, 'name' => 'writer', 'display_name' => 'Người viết bài', 'created_at'=>now(),],
        ]);

        DB::table('role_user')->insert([
            ['user_id' => 1, 'role_id' => 1, 'created_at'=>now(),],
            ['user_id' => 2, 'role_id' => 2, 'created_at'=>now(),],
            ['user_id' => 3, 'role_id' => 3, 'created_at'=>now(),],
        ]);

        DB::table('role_permission')->insert([
            ['role_id' => 1, 'permission_id' => 1, 'created_at'=>now(),],
            ['role_id' => 1, 'permission_id' => 2, 'created_at'=>now(),],
            ['role_id' => 1, 'permission_id' => 3, 'created_at'=>now(),],
            ['role_id' => 1, 'permission_id' => 4, 'created_at'=>now(),],
            ['role_id' => 1, 'permission_id' => 5, 'created_at'=>now(),],
            ['role_id' => 1, 'permission_id' => 6, 'created_at'=>now(),],
            ['role_id' => 1, 'permission_id' => 7, 'created_at'=>now(),],
            ['role_id' => 1, 'permission_id' => 8, 'created_at'=>now(),],
            ['role_id' => 1, 'permission_id' => 9, 'created_at'=>now(),],
            ['role_id' => 1, 'permission_id' => 10, 'created_at'=>now(),],
            ['role_id' => 1, 'permission_id' => 11, 'created_at'=>now(),],
            ['role_id' => 1, 'permission_id' => 12, 'created_at'=>now(),],

            ['role_id' => 2, 'permission_id' => 5, 'created_at'=>now(),],
            ['role_id' => 2, 'permission_id' => 6, 'created_at'=>now(),],
            ['role_id' => 2, 'permission_id' => 7, 'created_at'=>now(),],
            ['role_id' => 2, 'permission_id' => 8, 'created_at'=>now(),],

            ['role_id' => 3, 'permission_id' => 9, 'created_at'=>now(),],
            ['role_id' => 3, 'permission_id' => 10, 'created_at'=>now(),],
            ['role_id' => 3, 'permission_id' => 11, 'created_at'=>now(),],
            ['role_id' => 3, 'permission_id' => 12, 'created_at'=>now(),],
        ]);
    }
}

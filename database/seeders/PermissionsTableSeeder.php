<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ['name' => 'user-index', 'display_name' => 'Danh sách người dùng', 'created_at'=>now(),],
            ['name' => 'user-add', 'display_name' => 'Thêm người dùng', 'created_at'=>now(),],
            ['name' => 'user-edit', 'display_name' => 'Sửa người dùng', 'created_at'=>now(),],
            ['name' => 'user-delete', 'display_name' => 'Xóa người dùng', 'created_at'=>now(),],
            ['name' => 'role-index', 'display_name' => 'Danh sách vai trò', 'created_at'=>now(),],
            ['name' => 'role-add', 'display_name' => 'Thêm vai trò', 'created_at'=>now(),],
            ['name' => 'role-edit', 'display_name' => 'Sửa vai trò', 'created_at'=>now(),],
            ['name' => 'role-delete', 'display_name' => 'Xóa vai trò', 'created_at'=>now(),],
            ['name' => 'permission-index', 'display_name' => 'Danh sách quyền', 'created_at'=>now(),],
            ['name' => 'permission-add', 'display_name' => 'Thêm quyền', 'created_at'=>now(),],
            ['name' => 'permission-edit', 'display_name' => 'Sửa quyền', 'created_at'=>now(),],
            ['name' => 'permission-delete', 'display_name' => 'Xóa quyền', 'created_at'=>now(),],
        ]);


    }
}

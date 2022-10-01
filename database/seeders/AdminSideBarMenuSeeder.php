<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminSidebarMenu;

class AdminSideBarMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminSidebarMenu::insert([
            [
                'name' => 'dashboard',
                'slug' => '/dashboard',
                'status' => 1,
                'parent_menu_id' => 0,
                'is_dropdown_menu' => 0,
                'permission_value' => 'admin_sidebarmenu_dashboard',
                'created_at' => now(),
            ],
            [
                'name' => 'users',
                'slug' => '/users',
                'status' => 1,
                'parent_menu_id' => 0,
                'is_dropdown_menu' => 0,
                'permission_value' => 'admin_sidebarmenu_users',
                'created_at' => now(),
            ],
            [
                'name' => 'settings',
                'status' => 1,
                'slug' => null,
                'parent_menu_id' => 0,
                'is_dropdown_menu' => 1,
                'permission_value' => 'admin_sidebarmenu_settings',
                'created_at' => now(),
            ],
            [
                'name' => 'roles',
                'slug' => '/roles',
                'status' => 1,
                'parent_menu_id' => 3, // settings
                'is_dropdown_menu' => 0, // settings
                'permission_value' => 'admin_sidebarmenu_roles', // settings
                'created_at' => now(), // settings
            ],
            [
                'name' => 'permission',
                'slug' => '/permission',
                'status' => 1,
                'parent_menu_id' => 3, // settings
                'is_dropdown_menu' => 0, // settings
                'permission_value' => 'admin_sidebarmenu_permission', // settings
                'created_at' => now(), // settings
            ],
        ]);
    }
}

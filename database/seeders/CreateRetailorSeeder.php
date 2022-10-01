<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class CreateRetailorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Retailor',
            'email' => 'retailor@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $retailorRoleId = Role::where('name', 'retailor')->value('id');
        $role = Role::find($retailorRoleId);
        $permissions = Permission::whereIn('name', [
            'retailor',
            'admin_sidebarmenu_dashboard',
        ])->pluck('id', 'id');

        // echo "<pre>"; print_r( $permissions );die;

        $role->syncPermissions($permissions);
        $user->assignRole([$retailorRoleId]);
        $user->givePermissionTo(['admin_sidebarmenu_dashboard']);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class CreateDistributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $user = User::create([
            'name' => 'Distributor',
            'email' => 'distributor@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $distributorRoleId = Role::where('name', 'disributor')->value('id');
        $role = Role::find($distributorRoleId);
        $permissions = Permission::where('name', 'distributor')->pluck(
            'id',
            'id'
        );

        // echo "<pre>"; print_r( $permissions );die;

        $role->syncPermissions($permissions);
        $user->assignRole([$distributorRoleId]);
        $user->givePermissionTo([
            'admin_sidebarmenu_dashboard',
            'admin_sidebarmenu_users',
        ]);
    }
}

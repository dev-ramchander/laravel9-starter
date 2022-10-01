<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class CreateCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Customer',
            'email' => 'customer@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $customerRoleId = Role::where('name', 'customer')->value('id');
        $role = Role::find($customerRoleId);
        $permissions = Permission::where('name', 'customer')->pluck('id', 'id');

        // echo "<pre>"; print_r( $permissions );die;

        $role->syncPermissions($permissions);
        $user->assignRole([$customerRoleId]);
        $user->givePermissionTo(['admin_sidebarmenu_dashboard']);
    }
}

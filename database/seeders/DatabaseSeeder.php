<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleTableSeeder::class,
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
            CreateDistributorSeeder::class,
            CreateRetailorSeeder::class,
            CreateCustomerSeeder::class,
            AdminSideBarMenuSeeder::class,
            //UsersTableSeeder::class,
        ]);
    }
}

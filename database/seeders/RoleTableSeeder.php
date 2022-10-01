<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    const gurad = 'web';
    public function run()
    {
        $roles = [
            [
                'name'=>'admin',
                'guard_name'=> self::gurad,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'=>'disributor',
                'guard_name'=> self::gurad,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'=>'retailor',
                'guard_name'=> self::gurad,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'=>'customer',
                'guard_name'=> self::gurad,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'=>'guest',
                'guard_name'=> self::gurad,
                'created_at' => now(),
                'updated_at' => now()
            ],
         ];

         Role::insert($roles);

    }
}

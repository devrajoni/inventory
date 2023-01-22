<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;
use Hash;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'dashboard'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'product'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'category'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'brand'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'unit'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'user'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'role'  , 'guard_name' => 'web',]);
    }
}

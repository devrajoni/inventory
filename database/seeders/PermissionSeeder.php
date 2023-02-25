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
        Permission::create(['name' => 'Dashboard'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Product'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Product Category'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Brand'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Unit'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'User'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Role'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Expense'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Expense Category'  , 'guard_name' => 'web',]);
    }
}

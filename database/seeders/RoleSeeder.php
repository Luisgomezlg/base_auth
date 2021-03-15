<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Correr roles
       $role1 = Role::create(['name' => 'Admin']);
       $role2 = Role::create(['name' => 'Client']);

       Permission::create(['name' => 'dashboard'])->syncRoles([$role1, $role2]);

       Permission::create(['name' => 'categories.index'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'categories.create'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'categories.edit'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'categories.destroy'])->syncRoles([$role1, $role2]);

    }
}

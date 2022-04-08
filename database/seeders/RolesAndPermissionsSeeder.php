<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{

    public function run(): void
    {
        // Resetting cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();


        /**************************************
         * Creating Roles
         **************************************/
        $admin_role = Role::create(['name' => 'admin']);
        $manager_role = Role::create(['name' => 'manager']);
        $engineer_role = Role::create(['name' => 'super_admin']);


        /**************************************
         * Creating permissions
         **************************************/

        $permission_title = Permission::create(['name' => 'permission_title']);


        /**************************************
         * Assigning permissions
         **************************************/

        $manager_role->givePermissionTo([$permission_title]);


        /**************************************
         * Seeding with demo users TODO: RM
         **************************************/

        // Creating a manger
        $manager = \App\Models\User::factory()->create([
            'name' => 'Mr Manager',
            'email' => 'manager@cpa-admin.com',
        ]);
        $manager->assignRole($manager_role);

        // creating an admin user
        $admin = \App\Models\User::factory()->create([
            'name' => 'Mr. Administrator',
            'email' => 'admin@cpa-admin.com',

        ]);
        $admin->assignRole($admin_role);

        // Creating a super user
        $engineer = \App\Models\User::factory()->create([
            'name' => 'Mr Engineer',
            'email' => 'superadmin@cpa-admin.com',

        ]);
        $engineer->assignRole($engineer_role);
    }
}

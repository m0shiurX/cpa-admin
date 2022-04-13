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
        $engineer_role = Role::create(['name' => 'super_admin']);
        $admin_role = Role::create(['name' => 'admin']);
        $manager_role = Role::create(['name' => 'manager']);
        $member_role = Role::create(['name' => 'member']);


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

        // Creating a member
        $member = \App\Models\User::factory()->create([
            'name' => 'Mr Manager',
            'email' => 'member@cpa-admin.com',
        ]);
        $member->assignRole($member_role);

        // Creating a manager
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
            'email' => 'super_admin@cpa-admin.com',

        ]);
        $engineer->assignRole($engineer_role);
    }
}

<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Database\Seeders\RolesSeeder;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //defining admin permissions
        $adminPermissions = [
            //user related management permissions
            'manage users',
            'manage roles',
            'manage alumni',
            'manage employers',
            //content management permissions
            'manage content',
            // Event Management Permissions
            'manage events',
            // Permissions and Roles Management Permissions
            'manage permissions',
            // System Settings Permissions
            'manage system settings',
            // Reports and Analytics Permissions
            'view reports',
            // Security Management Permissions
            'manage security',
            // System Maintenance Permissions
            'perform maintenance',

        ];
        // defining alumni permissions
        $alumniPermissions = [
            'view profile',
            'edit profile',
            'upload portfolio',
            'manage portfolio',
            'post events',
            'join events',
            'search alumni',
            'access career resources',
            'receive real-time job alerts',
            'participate in discussions',
            'view alumni directory',
            'provide feedback and endorsements',
        ];

        // defining employer PERMISSIONS
        $employerPermissions = [
            'view alumni profiles',
            'search and discover alumni',
            'post job opportunities',
            'manage job postings',
            'contact alumni',
            'participate in events and webinars',
            'provide feedback and endorsements',
            'receive real-time job alerts',
        ];

        //seed permissions to the permissions table
        foreach ($adminPermissions as $adminpermissionName) {
            // firstOrCreate is used only if they dont exist in the database already
            // used to prevent duplicate entries
            Permission::firstOrCreate(['name' => $adminpermissionName]);
        };
        foreach ($alumniPermissions as $alumnipermissionName){
            Permission::firstOrCreate(['name' => $alumnipermissionName]);
        }
        foreach($employerPermissions as $employerPermissionName){
            Permission::firstOrCreate(['name' => $employerPermissionName]);
        }



        //assigning  permissions to admin role
         $adminRole = Role::where('name', 'Admin')->first();
         $alumniRole = Role::where('name','Alumni')->first();
         $employerRole = Role::where('name', 'Employer')->first();

         if($adminRole){
            // sync permissions is used to assign permissions to each role
             $adminRole->syncPermissions(Permission::whereIn('name', $adminPermissions)->get());
         }else{
            $this->command->error("Admin role not found!");
         };

         if ($alumniRole) {
            $alumniRole->syncPermissions(Permission::whereIn('name', $alumniPermissions)->get());
        } else {
            $this->command->error("Alumni role not found!");
        }

        if ($employerRole) {
            $employerRole->syncPermissions(Permission::whereIn('name', $employerPermissions)->get());
        } else {
            $this->command->error("Employer role not found!");
        }
    }
}

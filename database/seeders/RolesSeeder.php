<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creating roles for my application
        //admin role
        //admin is a slug and can be used to check if user has this role or not
        Role::create(['name' => 'Admin']);

        //alumni role
        Role::create(['name' => "Alumni"]);

        //employer role
        Role::create(['name' => 'Employer']);
    }
}

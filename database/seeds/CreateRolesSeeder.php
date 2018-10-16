<?php

use Illuminate\Database\Seeder;
use Ultraware\Roles\Models\Role;

class CreateRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => "Dashboard administrator ", // optional
            'level' => 1, // optional, set to 1 by default
        ]);        
    }
}

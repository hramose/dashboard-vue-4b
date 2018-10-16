<?php

use Illuminate\Database\Seeder;
use Ultraware\Roles\Models\Permission;

class CreatePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createUsersPermission = Permission::create([
            'name' => 'Create users',
            'slug' => 'create.users',
            'description' => 'Create users in dashboard', // optional
        ]);
    }
}

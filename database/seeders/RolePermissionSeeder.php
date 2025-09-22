<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
        public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        //permissions
        Permission::create(['name'=> 'view posts']);
        Permission::create(['name'=> 'create posts']);
        Permission::create(['name'=> 'edit posts']);
        Permission::create(['name'=> 'delete posts']);

        //roles
        $admin=Role::create(['name'=> 'admin']);
        $editor=Role::create(['name'=> 'editor']);
        $viewer=Role::create(['name'=> 'viewer']);

        //assign per to roles
        $admin->givePermissionTo(Permission::all());
        $editor->givePermissionTo(['view posts','create posts','edit posts']);
        $viewer->givePermissionTo(['view posts']);
}
}
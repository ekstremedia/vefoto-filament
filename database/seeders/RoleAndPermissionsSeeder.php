<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Admin']);
        $mod = Role::create(['name' => 'Moderator']);
        $author = Role::create(['name' => 'Author']);
        $member = Role::create(['name' => 'Member']);

        $editUsers = Permission::create(['name' => 'Edit users']);
        $createUsers = Permission::create(['name' => 'Create users']);
        $deleteUsers = Permission::create(['name' => 'Delete users']);
        $viewUsers = Permission::create(['name' => 'View users']);

        $editArticles = Permission::create(['name' => 'Edit articles']);
        $createArticles = Permission::create(['name' => 'Create articles']);
        $deleteArticles = Permission::create(['name' => 'Delete articles']);
        $viewArticles = Permission::create(['name' => 'View articles']);

        $admin->givePermissionTo([
            $editArticles,
            $createArticles,
            $deleteArticles,
            $viewArticles,
            $editUsers,
            $createUsers,
            $deleteUsers,
            $viewUsers
        ]);

        $mod->givePermissionTo([
            $editArticles,
            $createArticles,
            $viewArticles
        ]);

        $author->givePermissionTo([
            $createArticles,
            $editArticles,
            $viewArticles
        ]);

        $member->givePermissionTo([
            $viewArticles
        ]);

    }
}

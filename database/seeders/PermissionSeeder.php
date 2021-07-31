<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert(
            [
            [
                'title'=>'users_management_access',
            ],
            [
                'title'=>'users_access',
            ],
            [
                'title'=>'users_create',
            ],
            [
                'title'=>'users_read',
            ],
            [
                'title'=>'users_update',
            ],
            [
                'title'=>'users_delete',
            ],
            [
                'title'=>'roles_access',
            ],
            [
                'title'=>'roles_create',
            ],
            [
                'title'=>'roles_read',
            ],
            [
                'title'=>'roles_update',
            ],
            [
                'title'=>'roles_delete',
            ],
            [
                'title'=>'permissions_access',
            ],
            [
                'title'=>'permissions_create',
            ],
            [
                'title'=>'permissions_read',
            ],
            [
                'title'=>'permissions_update',
            ],
            [
                'title'=>'permissions_delete',
            ],
            [
                'title'=>'items_access',
            ],
            [
                'title'=>'items_create',
            ],
            [
                'title'=>'items_read',
            ],
            [
                'title'=>'items_update',
            ],
            [
                'title'=>'items_delete',
            ],
            [
                'title'=>'menu_herbal',
            ],
            [
                'title'=>'menu_steroids',
            ],

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Sender Permissions
         */

        DB::table('permissions')->insert([
            'name' => 'edit product',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'view all product',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'delete product',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'create product',
            'guard_name' => 'web',
        ]);


        /*
         * different product view permission
         */

        DB::table('permissions')->insert([
            'name' => 'view product type1',
            'guard_name' => 'web',
        ]);

//        DB::table('permissions')->insert([
//            'name' => 'view all product',
//            'guard_name' => 'web',
//        ]);

        DB::table('permissions')->insert([
            'name' => 'view product type2',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name' => 'view product type3',
            'guard_name' => 'web',
        ]);


        /*
         * Receiver Permissions
         */



        DB::table('permissions')->insert([
            'name' => 'edit user',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'view user',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'delete user',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'create user',
            'guard_name' => 'web',
        ]);


        DB::table('permissions')->insert([
            'name' => 'edit category',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'view category',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'delete category',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'create category',
            'guard_name' => 'web',
        ]);

        /*
         * Permission Permissions
         */



        DB::table('permissions')->insert([
            'name' => 'edit permission',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'view permission',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'delete permission',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'create permission',
            'guard_name' => 'web',
        ]);
    }
}

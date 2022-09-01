<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'User1',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'User2',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'User3',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'Super Admin',
            'guard_name' => 'web',
        ]);

        $adminRole = Role::where('name' , 'Admin')->first();
        $user1Role = Role::where('name' , 'User1')->first();
        $user2Role = Role::where('name' , 'User2')->first();
        $user3Role = Role::where('name' , 'User3')->first();
        $adminPermissions = Permission::whereNotIn('name' , [
            'edit permission' , 'view permission' , 'delete permission' , 'create permission',
            'view user' , 'create user' , 'edit user' , 'delete user'
        ])->get();
        $user1Permissions = Permission::whereIn('name' , ['view product type1'])->get();
        $user2Permissions = Permission::whereIn('name' , ['view product type2'])->get();
        $user3Permissions = Permission::whereIn('name' , ['view product type3'])->get();
        $adminRole->syncPermissions($adminPermissions);
        $user1Role->syncPermissions($user1Permissions);
        $user2Role->syncPermissions($user2Permissions);
        $user3Role->syncPermissions($user3Permissions);
    }
}

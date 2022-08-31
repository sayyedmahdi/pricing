<?php

namespace App\Http\Controllers;

use App\Helpers\GroceryCrud;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AccessControlController extends Controller
{

    public function rolesList() {
        $roles = Role::whereNotIn('name' , ['Super Admin'])->get();
        $persianPermissionNames = Config::get('lang');
        foreach ($roles as $key => $role){
            $persianRolePermission = [];
            foreach ($role->getPermissionNames()->toArray() as $permissionName){
                $persianRolePermission[] = $persianPermissionNames[$permissionName];
            }
            $roles[$key]->permissionNames = join(" , " , $persianRolePermission);
        }

        $permissions = Permission::all()->groupBy('tag');
        foreach ($permissions as $keyGroup => $permissionGroup){
            foreach ($permissionGroup as $key => $permission){
                $permissions[$keyGroup][$key]->name = $persianPermissionNames[$permission->name];
            }

        }

        return view('access-control.roles_list' , compact('roles' , 'permissions'));
    }

    public function changePermission(Request $request) {
        $validate = Validator::make($request->all() , [
            'roleId' => 'integer|exists:roles,id|required',
            'permissions.*' => 'integer|exists:permissions,id',
            'permissions' => 'array|required'
        ]);

        if ($validate->passes()){
            $role = Role::findById($request->roleId);
            $permissions = Permission::whereIn('id' , $request->permissions)->get();
            $role->syncPermissions($permissions);

            return response()->json('تغییرات با موفقیت ذخیره شد' , '200');
        }else{
            return response()->json($validate->errors()->all());
        }
    }
}

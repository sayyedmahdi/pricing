<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Testing\Fluent\Concerns\Has;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index(){
        $users = User::all();

        return view('user.index' , compact('users'));
    }

    public function showLogin(){
        if (Auth::user()){
            return redirect()->back();
        }

        return view('login');
    }

    public function login(Request $request){
        $validator = Validator::make($request->all() , [
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $credential = ['username' => $request->username , 'password' => $request->password];

        if (Auth::attempt($credential)){
            $user = User::where('username' , $request->username)->first();
            Auth::login($user);
            if ($user->hasRole('Super Admin') || $user->hasRole('Admin')){
                return redirect()->intended(route('admin_dashboard'));
            }
            return redirect()->intended(route('index_all_products'));
        }else{
            return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
                'approve' => 'Wrong password or this account not approved yet.',
            ]);
        }
    }

    public function showCreate(){
        $roles = Role::whereNotIn('name' , ['Super Admin'])->get();

        return view('user.create' , compact('roles'));
    }

    public function register(Request $request){
        $validator = Validator::make($request->all() , [
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string',
            'name' => 'required|string',
            'role' => 'required',
            'mobile' => 'required|numeric'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'name'     => $request->name,
            'mobile'   => $request->mobile
        ]);

        $role = Role::where('name' , $request->role)->first();
        $user->assignRole($role);

        return redirect()->route('index_user');
    }

    public function showEdit($id){
        $user = User::find($id);
        $roles = Role::whereNotIn('name' , ['Super Admin'])->get();

        return view('user.edit' , compact('user' , 'roles'));
    }

    public function dashboardAdmin(){
        $products = Product::all();
        $categories = Category::all();
        return view('adminDashboard' , compact('products' , 'categories'));
    }

    public function dashboardUser(){
        $user = Auth::user();
        return view('user.dashboard' , compact('user'));
    }

    public function editProfile(Request $request){
        $validator = Validator::make($request->all() , [
            'username' => 'required|string',
            'mobile'   => 'required|numeric',
            'name'     => 'required|string'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }

        $user = Auth::user();

        $duplicateUsername = User::where('username' , $request->username)->get();

        if (count($duplicateUsername) > 1 ){
            return back()->with(['duplicate' => 'نام کاربری تکراری است']);
        }else{
            if (count($duplicateUsername) == 1){
                if ($user->id !== $duplicateUsername[0]->id){
                    return back()->withErrors(['duplicate' => 'نام کاربری تکراری است']);
                }
            }
        }

        if (!empty($request->password) && $request->password !== ""){
            User::where('id' , $user->id)->update([
                'password' => Hash::make($request->password),
            ]);
        }

        User::where('id' , $user->id)->update([
            'username' => $request->username,
            'mobile'   => $request->mobile,
            'name'     => $request->name
        ]);

        return back()->with('success' , 'اطلاعات با موفقیت تغییر یافت');
    }

    public function edit(Request $request){
        $validator = Validator::make($request->all() , [
            'id'       => 'required|numeric|exists:users,id',
            'username' => 'required|string',
            'name'     => 'required|string',
            'mobile'   => 'required|numeric',
            'role' => 'required'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $user = User::find($request->id);

        $duplicateUsername = User::where('username' , $request->username)->get();

        if (count($duplicateUsername) > 1 ){
            return back()->with(['duplicate' => 'نام کاربری تکراری است']);
        }else{
            if (count($duplicateUsername) == 1){
                if ($user->id !== $duplicateUsername[0]->id){
                    return back()->withErrors(['duplicate' => 'نام کاربری تکراری است']);
                }
            }
        }

        $user->username = $request->username;
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        if ($request->filled('password')){
            $user->password = Hash::make($request->password);
        }

        $existsRole = Role::whereIn('name' , [$user->getRoleNames()])->get();


        $user->removeRole($existsRole[0]);
        $role = Role::where('name' , $request->role)->first();
        $user->assignRole($role);

        $user->save();

        return redirect()->route('index_user');
    }

    public function showDashboard(){
        return '';
    }
}

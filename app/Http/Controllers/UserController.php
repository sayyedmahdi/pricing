<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Testing\Fluent\Concerns\Has;

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
            return redirect()->intended(route('create_product'));
        }else{
            return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
                'approve' => 'Wrong password or this account not approved yet.',
            ]);
        }
    }

    public function register(Request $request){
        $validator = Validator::make($request->all() , [
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string',
            'name' => 'required|string'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'name'     => $request->name
        ]);

        return back()->with('success' , 'user created');
    }

    public function showEdit($id){
        $user = User::find($id);

        return view('user.edit' , compact('user'));
    }

    public function edit(Request $request){
        $validator = Validator::make($request->all() , [
            'id'       => 'required|numeric|exists:users,id',
            'username' => 'required|string|unique:users,username',
            'name'     => 'required|string'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $user = User::find($request->id);

        $user->username = $request->username;
        $user->name = $request->name;
        if ($request->filled('password')){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return back()->with('success' , 'user created');
    }

    public function showDashboard(){
        return '';
    }
}

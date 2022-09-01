<?php

use App\Http\Controllers\AccessControlController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommodityController;
use App\Http\Controllers\CommodityPropertyController;
use App\Http\Controllers\CommodityTypeController;
use App\Http\Controllers\Crud;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\NavyController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProvinceCityController;
use App\Http\Controllers\TarabarController;
use App\Http\Controllers\TransceiverController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleTonnageController;
use App\Http\Controllers\VehicleTypeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});


Route::get('/', function () {
    $user = Auth::User();
    if (!empty($user)) {
        return redirect('/dashboard');
    } else {
        return redirect('/login');
    }
})->name('index');

// ///////////////////   user routes  ///////////////////////

Route::get('/login', [UserController::class , 'showLogin'])->name("login");
Route::get('/products' , [ProductController::class , 'showProducts'])->middleware('auth');

Route::post('login' , [UserController::class , 'login'])->name('login_action');

Route::get('/dashboard', [UserController::class , 'showDashboard'])->middleware('auth');

//Route::get('/profile', function () {
//    return view('user.profile');
//})->middleware('auth');

Route::group(['prefix' => 'product' , 'middleware' => ['auth' , 'role:Admin' , 'role:Super Admin']] , function () {
    Route::get('/' , [ProductController::class , 'index'])->name('index_product');
    Route::get('create' , [ProductController::class , 'create']);
    Route::get('edit/{id}' , [ProductController::class , 'showEdit'])->name('show_edit_product');
    Route::post('edit' , [ProductController::class , 'edit'])->name('edit_product');
    Route::post('create' , [ProductController::class , 'store'])->name('create_product');
    Route::get('/delete/{id}' , [ProductController::class , 'destroy'])->name('delete_product');
});

Route::group(['prefix' => 'category' , 'middleware' => ['auth' , 'role:Admin' , 'role:Super Admin']] , function () {
    Route::get('/' , [CategoryController::class , 'index'])->name('index_category');
    Route::get('create' , [CategoryController::class , 'create']);
    Route::get('edit/{id}' , [CategoryController::class , 'showEdit'])->name('show_edit_category');
    Route::post('edit' , [CategoryController::class , 'edit'])->name('edit_category');
    Route::post('create' , [CategoryController::class , 'store'])->name('create_category');
    Route::get('/delete/{id}' , [CategoryController::class , 'destroy'])->name('delete_category');
});

Route::group(['prefix' => 'user' , 'middleware' => ['auth' , 'role:Super Admin']] , function () {
    Route::get('create' , [UserController::class , 'showCreate']);
    Route::get('/' , [UserController::class , 'index'])->name('index_user');
    Route::get('edit/{id}' , [UserController::class , 'showEdit'])->name('show_edit_user');
    Route::post('edit' , [UserController::class , 'edit'])->name('edit_user');
    Route::post('create' , [UserController::class , 'register'])->name('create_user');
    Route::get('/delete/{id}' , [ProductController::class , 'destroy'])->name('delete_user');
});

Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return Redirect::to('/login');
})->name('logout');


/*
Route::get('/', function () {
    return view('user.index');
});*/


Route::group(['prefix' => 'access-control' , 'middleware' => ['auth' , 'role:Super Admin']], function(){
    Route::get('/' , [AccessControlController::class , 'rolesList']);
    Route::post('/change-permissions' , [AccessControlController::class , 'changePermission']);
});

// Start route for some controller

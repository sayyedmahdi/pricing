<?php

namespace App\Providers;

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menus = Config::get('menu');
        $user = User::find('1');
        $user->assignRole('admin');
        View::share('menus', $menus);
    }
}

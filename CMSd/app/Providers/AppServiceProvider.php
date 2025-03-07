<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
   

    public function boot()
    {
        View::composer('*', function ($view) {
            $user = DB::table('login')
                ->where('email', Session::get('username'))
                ->first();

            $view->with('user', $user);
        });
    }
}



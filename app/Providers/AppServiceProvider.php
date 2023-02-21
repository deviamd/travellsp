<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
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
        Gate::define('admin', function(User $user){
            return $user->level === 2;
        });
        Gate::define('user', function(User $user){
            return $user->level === 1;
        });
        Gate::define('superadmin', function(User $user){
            return $user->level === 3;
        });

    }
}

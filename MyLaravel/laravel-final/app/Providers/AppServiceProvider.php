<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
 

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
        // agar kita mengunakan bootsrap bukan default tailwind
        Paginator::useBootstrap();

        // gate untuk middleware
        Gate::define('admin', function(User $user) {
            return $user->is_admin;
        });
    }
}

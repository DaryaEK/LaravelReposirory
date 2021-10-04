<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
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
        Model::unguard();

        Paginator::useBootstrap();

        Gate::define('admin', function (User $user) {
            return $user->name === 'General';
        });

        Blade::if('admin', function () {
            if (request()->user()) {
                return request()->user()->can('admin');
            }
            return false;
        });
    }

}

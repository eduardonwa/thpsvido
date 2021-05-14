<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\User;
use App\Models\Banner;
use App\Models\Ability;
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
        View::composer(['admin.users.index'], function ($view) {
            $view->with('users', User::get());
            $view->with('roles', Role::get());
        });

        View::composer(['admin.roles.index'], function ($view) {
            $view->with('users', User::with('roles')->get());
            $view->with('roles', Role::with('abilities')->get());
        });

        View::composer(['components.modal-roles', 'components.tabs-roles'], function ($view) {
            $view->with('roles', Role::get());
            $view->with('abilities', Ability::get());
        });

        View::composer(['admin.abilities.index'], function ($view) {
            $view->with('abilities', Ability::get());
        });

        View::composer(['components.modal-banner'], function ($view) {
            $view->with('banner', Banner::get());
        });
    }
}

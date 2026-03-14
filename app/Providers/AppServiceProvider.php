<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
    public function boot(): void
    {
        Blade::component('admin.layouts.app', 'admin-layout');
        Blade::component('admin.layouts.app', 'admin-layouts-app');
        Blade::component('user.layouts.app', 'app-layout');
        Blade::component('user.layouts.guest', 'guest-layout');

        Blade::component('admin.components.auth-session-status', 'admin-auth-session-status');
        Blade::component('admin.components.input-label', 'admin-input-label');
        Blade::component('admin.components.text-input', 'admin-text-input');
        Blade::component('admin.components.input-error', 'admin-input-error');
        Blade::component('admin.components.primary-button', 'admin-primary-button');
        Blade::component('admin.components.danger-button', 'admin-danger-button');
        Blade::component('admin.components.secondary-button', 'admin-secondary-button');
        Blade::component('admin.components.modal', 'admin-modal');
        Blade::component('admin.components.dropdown', 'admin-dropdown');
        Blade::component('admin.components.dropdown-link', 'admin-dropdown-link');
        Blade::component('admin.components.nav-link', 'admin-nav-link');
        Blade::component('admin.components.responsive-nav-link', 'admin-responsive-nav-link');
        Blade::component('admin.components.application-logo', 'admin-application-logo');

        Blade::component('user.components.auth-session-status', 'auth-session-status');
        Blade::component('user.components.input-label', 'input-label');
        Blade::component('user.components.text-input', 'text-input');
        Blade::component('user.components.input-error', 'input-error');
        Blade::component('user.components.primary-button', 'primary-button');
        Blade::component('user.components.danger-button', 'danger-button');
        Blade::component('user.components.secondary-button', 'secondary-button');
        Blade::component('user.components.modal', 'modal');
        Blade::component('user.components.dropdown', 'dropdown');
        Blade::component('user.components.dropdown-link', 'dropdown-link');
        Blade::component('user.components.nav-link', 'nav-link');
        Blade::component('user.components.responsive-nav-link', 'responsive-nav-link');
        Blade::component('user.components.application-logo', 'application-logo');
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        // Define the gate for Admin access
        Gate::define('access-admin', function (User $user) {
            return $user->role === 'it_staff';
        });
        
        // Define gate for Lecturer access (we will use this next)
        Gate::define('access-lecturer', function (User $user) {
            return $user->role === 'lecturer';
        });

    }
}

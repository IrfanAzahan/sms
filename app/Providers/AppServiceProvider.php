<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate; 
use App\Models\User;                

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Define the gate for Admin access
        Gate::define('access-admin', function (User $user) {
            return $user->role === 'it_staff';
        });
        
        // Define gate for Lecturer access
        Gate::define('access-lecturer', function (User $user) {
            return $user->role === 'lecturer';
        });
    }
}
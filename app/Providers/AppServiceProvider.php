<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Ensure User model is correctly observed
        URL::forceScheme('https');
        User::observe(UserObserver::class);
    }
}

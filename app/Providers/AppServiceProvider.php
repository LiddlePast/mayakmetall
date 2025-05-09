<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
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
        Gate::define('view-resource', function (User $user) {
            return $user->role === 'user';
        });
//        Gate::policy(User::class, UserPolicy::class);
    }
}

<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Slider;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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
    public function boot(Request $request): void
    {
        Inertia::share([
            'contact' => Schema::hasTable('contacts') ? Contact::first() : [],
        ]);
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Route;

class LivewireServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Livewire::setUpdateRoute(fn ($handle) => Route::post('/custom/endpoint/update', $handle));

        Livewire::setScriptRoute(fn ($handle) => Route::get('/custom/livewire/livewire.js', $handle));
    }
}

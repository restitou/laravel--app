<?php

namespace Vuejsapp\Todojs;

use Illuminate\Support\ServiceProvider;

class VuejsappServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Vuejsapp\Todojs\TodoItemsController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'Todojs');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vuejsapp/todojs'),
        ]);
    }
}
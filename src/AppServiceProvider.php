<?php

namespace Sibtain\Campuses;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->load();
        $this->publish();
    }

    private function load()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/campuses.php', 'campuses');
    }

    private function publish()
    {
        $this->publishes([
            __DIR__ . '/config' => config_path('sibtain'),
        ], 'campuses-config');

        $this->publishes([
            __DIR__.'/client/src/js' => base_path('client/src/js'),
        ], 'campuses-assets');
    }

    public function register()
    {
        //
    }
}

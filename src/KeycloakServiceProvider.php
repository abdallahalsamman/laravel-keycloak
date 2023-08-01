<?php

namespace KeycloakIntegration;

use Illuminate\Support\ServiceProvider;

class KeycloakServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/api.php');

        // You can also publish configuration files if needed
        // $this->publishes([
        //     __DIR__.'/../config/keycloak.php' => config_path('keycloak.php'),
        // ]);
    }

    public function register()
    {
        //
    }
}


<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\ApiWrapper;
use App\Library\Services\Geth;

class GethServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //       

        $this->app->bind('Geth', App\Library\Services\Geth::class);
        
    }
}

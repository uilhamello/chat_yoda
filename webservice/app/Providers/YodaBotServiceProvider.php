<?php

namespace App\Providers;

use App\YodaBot\YodaBot;
use Illuminate\Support\ServiceProvider;

class YodaBotServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(YodaBot::class, function ($app) {
            return new YodaBot();;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

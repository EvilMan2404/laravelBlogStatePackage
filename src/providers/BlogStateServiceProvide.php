<?php

namespace Evilman2404\BlogState\providers;

use Illuminate\Support\ServiceProvider;

class BlogStateServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // load view files
        $this->loadViewsFrom(__DIR__.'/../views', 'BlogState');

        //load migrations

        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        // publish files
        $this->publishes([
            __DIR__.'/../views' => resource_path('views/vendor/blogstate'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}

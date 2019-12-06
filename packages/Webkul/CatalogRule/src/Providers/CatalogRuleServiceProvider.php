<?php

namespace Webkul\CatalogRule\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Webkul\CatalogRule\Console\Commands\PriceRuleIndex;

class CatalogRuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }

    /**
     * Register the console commands of this package
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole())
            $this->commands([PriceRuleIndex::class]);
    }
}
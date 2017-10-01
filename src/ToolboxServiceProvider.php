<?php

namespace Guapp\LaravelToolbox;

use Illuminate\Support\ServiceProvider;
use Guapp\LaravelToolbox\Console\DbConsoleCommand;

class ToolboxServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.dbconsole', function () {
            return new DbConsoleCommand;
        });

        $this->commands(['command.dbconsole']);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['command.dbconsole'];
    }
}

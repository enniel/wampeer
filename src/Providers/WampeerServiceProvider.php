<?php

namespace Enniel\Wampeer\Providers;

use Enniel\Wampeer\Console\Commands\RouterCommand;
use Illuminate\Support\ServiceProvider;
use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
use Thruway\Peer\Router;
use Thruway\Peer\RouterInterface;

class WampeerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            realpath(__DIR__.'/../../config/wampeer.php') => config_path('wampeer.php'),
        ], 'wampeer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
        $this->app->singleton(LoopInterface::class, function () {
            return (new Factory())->create();
        });
        $this->app->singleton(RouterInterface::class, function ($app) {
            return new Router($app->make(LoopInterface::class));
        });
        $this->app->singleton('command.wampeer.router.start', function ($app) {
            return new RouterCommand();
        });
        $this->commands('command.wampeer.router.start');
    }

    /**
     * Register the configuration.
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(realpath(__DIR__.'/../../config/wampeer.php'), 'wampeer');
    }
}

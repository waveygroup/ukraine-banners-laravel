<?php

namespace Wavey\UkraineBanners;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class UkraineBannersServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ukraine-banners.php', 'ukraine-banners');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ukraine-banners');
        $this->configurePublishing();
        $this->configureCommands();
        $this->callAfterResolving(BladeCompiler::class, function () {
            $this->registerComponent('banner');
        });
    }

    /**
     * Register the given component.
     *
     * @param  string  $component
     * @return void
     */
    protected function registerComponent(string $component)
    {
        Blade::component('ukraine-banners::components.'.$component, 'ukraine-'.$component);
    }

    /**
     * Configure the commands offered by the application.
     *
     * @return void
     */
    protected function configureCommands()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Console\InstallCommand::class,
        ]);
    }

    /**
     * Configure publishing for the package.
     *
     * @return void
     */
    protected function configurePublishing()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/ukraine-banners.php' => config_path('ukraine-banners.php'),
        ], 'ukraine-banners-config');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/wavey'),
        ], 'ukraine-banners-views');
    }
}

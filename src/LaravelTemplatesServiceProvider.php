<?php

namespace Throllm\LaravelTemplates;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\App;

class LaravelTemplatesServiceProvider extends ServiceProvider
{

    /**
     * The console commands.
     *
     * @var bool
     */
    protected $commands = [

    ];
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/polmo', 'Polmo');

        // --tag=verti
        $this->publishes([__DIR__.'/views/verti/assets' => base_path('public/assets/templates/verti/assets'),], 'verti');
        $this->publishes([__DIR__.'/views/verti/images' => base_path('public/assets/templates/verti/images'),], 'verti');
        $this->loadViewsFrom(__DIR__.'/views/verti', 'VERTI');
        
        // --tag=phantom
        $this->publishes([__DIR__.'/views/phantom/assets' => base_path('public/assets/templates/phantom/assets'),], 'phantom');
        $this->publishes([__DIR__.'/views/phantom/images' => base_path('public/assets/templates/phantom/images'),], 'phantom');
        $this->loadViewsFrom(__DIR__.'/views/phantom', 'PHANTOM');
        
        // --tag=telephasic
        $this->publishes([__DIR__.'/views/telephasic/assets' => base_path('public/assets/templates/telephasic/assets'),], 'telephasic');
        $this->publishes([__DIR__.'/views/telephasic/images' => base_path('public/assets/templates/telephasic/images'),], 'telephasic');
        $this->loadViewsFrom(__DIR__.'/views/telephasic', 'TELEPHASIC');

        $this->loadTranslationsFrom(__DIR__.'/lang', 'laraveltemplates');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        
        //$this->publishes([__DIR__ . '/config/laraveltemplates.php' => config_path('languageswitcher.php'), ]);
        //$router->middleware('name', 'MiddlewareClass');
    }
 
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

    }
    
 
    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
    }
}

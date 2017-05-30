<?php
namespace Ucha19871\FB;

use Illuminate\Support\ServiceProvider;


class FBServiceProvider extends ServiceProvider
{

    protected $defer = false;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('FB', function()
        {
            return new Firebase();
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('FB', 'Ucha19871\FB\Facades\FBFacades');
        });

    }
}

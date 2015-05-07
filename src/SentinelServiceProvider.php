<?php

namespace Optimus\Sentinel;

use Cartalyst\Sentinel\Laravel\SentinelServiceProvider as BaseServiceProvider;

class SentinelServiceProvider extends BaseServiceProvider {

    public function prepareResources() {
        // Lumen cannot publish resources.
    }

    public function register()
    {
        parent::register();

        $this->registerConfiguration();
    }

    public function registerConfiguration() {
        $this->app->configure('sentinel');

        // Instead of mergeConfigFrom
        $this->app['config']->set('cartalyst.sentinel', $this->app['config']->get('sentinel'));
    }

}
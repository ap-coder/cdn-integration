<?php

namespace App\Providers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use OpenCloud\OpenStack;
use OpenCloud\Rackspace;
use League\Flysystem\Filesystem;
use League\Flysystem\Rackspace\RackspaceAdapter as Adapter;

class RackspaceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('rackspace', function ($app, $config) {
            // $client = new Rackspace(Rackspace::US_IDENTITY_ENDPOINT, array(
            //     $config['rackspace']
            // ));
            $client = new Rackspace(Rackspace::US_IDENTITY_ENDPOINT, array(
                'username' => 'kevinmonta08',
                'apiKey' => '3e96591b0ec140e5b17868126f290d33',
            ));
            
            $store = $client->objectStoreService('cloudFiles', 'LON');
            $container = $store->getContainer('flysystem');
            
            return new Filesystem(new Adapter($container));
        });
    }
}

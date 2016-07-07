<?php

namespace DiegoFelix\CloudinaryWrapper;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use DiegoFelix\CloudinaryWrapper\CloudinaryWrapper;
use DiegoFelix\CloudinaryWrapper\CloudinaryWrapperFacade;

class CloudinaryWrapperServiceProvider extends ServiceProvider
{
    /**
    * Perform post-registration booting of services.
    *
    * @return void
    */
    public function boot()
    {
        AliasLoader::getInstance()->alias('CloudinaryWrapper', CloudinaryWrapperFacade::class);
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton('CloudinaryWrapper', function($app) {
            return new CloudinaryWrapper(
                env('CLOUDINARY_NAME'),
                env('CLOUDINARY_KEY'),
                env('CLOUDINARY_SECRET')
            );
        });
    }
}
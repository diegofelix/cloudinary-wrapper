<?php

namespace DiegoFelix\CloudinaryWrapper;

use DiegoFelix\CloudinaryWrapper\CloudinaryWrapper;
use Illuminate\Support\ServiceProvider;

class CloudinaryWrapperServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(CloudinaryWrapper::class, function($app) {
            return new CloudinaryWrapper(
                env('CLOUDINARY_NAME'),
                env('CLOUDINARY_KEY'),
                env('CLOUDINARY_SECRET')
            );
        });
    }
}
<?php

namespace DiegoFelix\CloudinaryWrapper;

use Illuminate\Support\Facades\Facade;

class CloudinaryWrapperFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'CloudinaryWrapper';
    }

}
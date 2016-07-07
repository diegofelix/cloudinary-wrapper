<?php

namespace DiegoFelix\ClaudinaryWrapper;

use Illuminate\Support\Facades\Facade;

class ClaudinaryWrapperFacade extends Facade
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
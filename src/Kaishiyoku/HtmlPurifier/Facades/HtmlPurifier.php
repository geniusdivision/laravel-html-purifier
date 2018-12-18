<?php

namespace Kaishiyoku\HtmlPurifier\Facades;

use Illuminate\Support\Facades\Facade;

class HtmlPurifier extends Facade
{
    /**
     * Get the registered component.
     *
     * @return object
     */
    protected static function getFacadeAccessor()
    {
        return 'htmlPurifier';
    }
}

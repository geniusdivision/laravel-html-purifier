<?php

namespace Kaishiyoku\Menu\Facades;

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
        return 'html_purifier';
    }
}

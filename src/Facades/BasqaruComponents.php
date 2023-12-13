<?php

namespace Khangrey\BasqaruComponents\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Khangrey\BasqaruComponents\BasqaruComponents
 */
class BasqaruComponents extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Khangrey\BasqaruComponents\BasqaruComponents::class;
    }
}

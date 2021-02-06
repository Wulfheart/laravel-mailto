<?php

namespace Wulfheart\LaravelMailto;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wulfheart\LaravelMailto\LaravelMailto
 */
class LaravelMailtoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-mailto';
    }
}

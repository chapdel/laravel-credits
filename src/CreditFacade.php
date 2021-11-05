<?php

namespace Chapdel\Credit;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chapdel\Credit\Credit
 */
class CreditFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-credit';
    }
}

<?php

namespace DraftsmanInc\DraftsmanLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DraftsmanInc\DraftsmanLaravel\DraftsmanLaravel
 */
class DraftsmanLaravel extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \DraftsmanInc\DraftsmanLaravel\DraftsmanLaravel::class;
    }
}

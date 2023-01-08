<?php

namespace Alfred\Meta\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alfred\Meta\Meta
 */
class Meta extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Alfred\Meta\Meta::class;
    }
}

<?php

namespace Saade\Teamtrust\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Saade\Teamtrust\Teamtrust
 */
class Teamtrust extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Saade\Teamtrust\Teamtrust::class;
    }
}

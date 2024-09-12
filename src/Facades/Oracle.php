<?php

namespace Aideveloper3000\Oracle\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aideveloper3000\Oracle\Oracle
 */
class Oracle extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Aideveloper3000\Oracle\Oracle::class;
    }
}

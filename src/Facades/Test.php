<?php
/**
 *Test
 * @author tan bing
 * @date 2021-04-20 16:38
 */


namespace Tab\Test\Facades;

use Illuminate\Support\Facades\Facade;

class Test extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'test';
    }

}
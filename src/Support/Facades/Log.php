<?php

namespace Tree6bee\Cf\Support\Facades;

use Tree6bee\Cf\Logging\Logger;
use Tree6bee\Cf\Logging\Writer;

class Log extends Facade
{
    //因为是对象，所以facade不会保持单例
    private static $instance;

    protected static function getFacadeAccessor()
    {
        if (empty(self::$instance)) {
            self::$instance = new Logger(new Writer(config('storage_path')));
        }

        return self::$instance;
    }
}

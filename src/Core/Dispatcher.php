<?php

namespace App\Core;

use Texlab\Route\Dispatcher as Disp;

class Dispatcher
{

    protected static $dispatcher;

    public static function init(Disp $dispatcher)
    {

        self::$dispatcher = $dispatcher;
    }

    public static function dispatcher(): Disp
    {

        return self::$dispatcher;
    }
}

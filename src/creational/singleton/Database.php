<?php

declare(strict_types=1);

namespace patterns\creational\singleton;

use Exception;

final class Database
{
    private static ?Database $instance = null;


    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }


    private function __construct()
    {

    }


    private function __clone()
    {

    }


    private function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }
}

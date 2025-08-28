<?php

declare(strict_types=1);

namespace patterns\creational\singleton;

use RuntimeException;

class Singleton
{
    private static $instances = [];


    protected function __construct()
    {
    }


    protected function __clone()
    {
    }


    public function __wakeup()
    {
        throw new RuntimeException('Cannot unserialize singleton');
    }


    public static function getInstance(): Singleton
    {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }

        return self::$instances[$subclass];
    }
}

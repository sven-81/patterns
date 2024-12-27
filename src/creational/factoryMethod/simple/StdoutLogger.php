<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod\simple;

class StdoutLogger implements Logger
{
    public function __construct()
    {
    }


    public function log(string $message): void
    {
        print $message;
    }
}

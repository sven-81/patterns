<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod\simple;

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}

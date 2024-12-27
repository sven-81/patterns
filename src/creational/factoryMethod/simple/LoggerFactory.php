<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod\simple;

interface LoggerFactory
{
    public function createLogger(): Logger;
}

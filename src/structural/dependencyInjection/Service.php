<?php

declare(strict_types=1);

namespace patterns\structural\dependencyInjection;

use patterns\creational\singleton\Logger;
use patterns\creational\singleton\Singleton;

class Service
{
    //Example for setter injektion
    private Singleton $logger;


    public function setLogger(Singleton $logger): void
    {
        $this->logger = $logger;
    }


    public function doSomething(): void
    {
        $this->logger->writeLog('Doing something...');
    }
}



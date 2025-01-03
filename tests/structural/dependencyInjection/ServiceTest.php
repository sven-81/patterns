<?php

declare(strict_types=1);

namespace patterns\structural\dependencyInjection;

use patterns\creational\singleton\Logger;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Service::class)]
class ServiceTest extends TestCase
{
    public function testServiceCanLog(): void
    {
        $loggerMock = $this->createMock(Logger::class);
        $loggerMock->expects($this->once())
            ->method('writeLog');

        $service = new Service();
        $service->setLogger($loggerMock);
        $service->doSomething();
    }
}

<?php

declare(strict_types=1);

namespace patterns\structural\serviceLocator;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(ServiceApp::class)]
#[CoversClass(DatabaseService::class)]
#[CoversClass(LoggerService::class)]
#[CoversClass(ServiceLocator::class)]
class ServiceAppTest extends TestCase
{
    public function testCanRunApp(): void
    {
        $app = new ServiceApp();
        $app->run();

        $this->expectOutputString(
            'Datenbankverbindung hergestellt.' . PHP_EOL
            . 'Log: some log message' . PHP_EOL
        );
    }
}

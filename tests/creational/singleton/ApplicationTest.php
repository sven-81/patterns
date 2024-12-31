<?php

declare(strict_types=1);

namespace patterns\creational\singleton;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Application::class)]
#[CoversClass(Config::class)]
#[CoversClass(Logger::class)]
class ApplicationTest extends TestCase
{
    private string $filePath;


    public function testCanLogConfigChangesWithOnlyOneInstance(): void
    {
        $application = new Application();
        $application->run();

        $this->filePath = __DIR__ . '/../../../src/creational/singleton/log.file';
        $this->assertFileExists($this->filePath);
        $this->expectOutputString(
            'Logger is unique' . PHP_EOL
            . 'Config singleton also works fine.' . PHP_EOL
        );
    }


    protected function tearDown(): void
    {
        unlink($this->filePath);
    }
}

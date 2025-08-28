<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod\simple;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Application::class)]
#[CoversClass(FileLogger::class)]
#[CoversClass(FileLoggerFactory::class)]
#[CoversClass(StdoutLogger::class)]
#[CoversClass(StdoutLoggerFactory::class)]
class ApplicationTest extends TestCase
{
    private string $path;


    protected function setUp(): void
    {
        $this->path = __DIR__ . '/file.log';
    }


    public function testCanRun(): void
    {
        $app = new Application();
        $app->run($this->path);

        $this->assertFileExists($this->path);
        $this->expectOutputString('I am a log message on stdout');
    }


    protected function tearDown(): void
    {
        unlink($this->path);
    }
}

<?php

declare(strict_types=1);

namespace patterns\creational\pool;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Application::class)]
#[CoversClass(DatabaseConnection::class)]
#[CoversClass(ConnectionPool::class)]
class ApplicationTest extends TestCase
{
    public function testCanRunPool(): void
    {
        $app = new Application();
        $app->run();

        $expectedString = 'Datenbankverbindung hergestellt!' . PHP_EOL;
        $this->expectOutputString(
            $expectedString
            . $expectedString
            . $expectedString
            . 'noch nichts im Pool:' . PHP_EOL
            . 'Aktuelle Poolgröße: 0' . PHP_EOL . PHP_EOL
            . 'Kann #4 nicht erzeugen: Maximale Anzahl von Verbindungen erreicht.' . PHP_EOL
            . 'noch immer nichts im Pool:' . PHP_EOL
            . 'Aktuelle Poolgröße: 0' . PHP_EOL . PHP_EOL
            . 'Verbindung erfolgreich in den Pool gelegt.' . PHP_EOL
            . 'Pool enthält jetzt etwas:' . PHP_EOL
            . 'Aktuelle Poolgröße: 1' . PHP_EOL . PHP_EOL
            . $expectedString
            . 'Verbindung aus Pool geholt; Pool wieder leer:' . PHP_EOL
            . 'Aktuelle Poolgröße: 0' . PHP_EOL . PHP_EOL
        );
    }
}

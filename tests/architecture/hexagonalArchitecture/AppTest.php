<?php

declare(strict_types=1);

namespace patterns\architecture\hexagonalArchitecture;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(App::class)]
#[CoversClass(CreateUser::class)]
#[CoversClass(GetUser::class)]
#[CoversClass(InMemoryUserRepository::class)]
#[CoversClass(User::class)]
#[CoversClass(UserRepositoryPort::class)]
class AppTest extends TestCase
{
    public function testRun(): void
    {
        $app = new App();
        $app->run();

        $this->expectOutputString(
            'Benutzer erstellt: maxmustermann' . PHP_EOL
            . 'Benutzer gefunden: maxmustermann' . PHP_EOL
        );
    }
}

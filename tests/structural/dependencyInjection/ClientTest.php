<?php

declare(strict_types=1);

namespace patterns\structural\dependencyInjection;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Client::class)]
#[CoversClass(Api::class)]
class ClientTest extends TestCase
{
    public function testCanRunApi(): void
    {
        $api = new Api();
        $client = new Client($api);
        $client->setApi($api);
        $client->run();

        $this->expectOutputString('run');
    }
}

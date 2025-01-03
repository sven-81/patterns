<?php

declare(strict_types=1);

namespace patterns\structural\dependencyInjection;

class Api
{
    public function doSomething(string $string): void
    {
        print $string;
    }
}

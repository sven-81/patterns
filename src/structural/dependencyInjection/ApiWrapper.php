<?php

declare(strict_types=1);

namespace patterns\structural\dependencyInjection;

interface ApiWrapper
{
    public function setApi(Api $api): void;
}

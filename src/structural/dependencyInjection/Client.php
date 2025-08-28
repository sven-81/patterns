<?php

declare(strict_types=1);

namespace patterns\structural\dependencyInjection;

class Client implements ApiWrapper
{
    public function __construct(private Api $api){
    }


    public function setApi(Api $api): void
    {
        $this->api = $api;
    }

    public function run(): void{
        $this->api->doSomething('run');
    }
}

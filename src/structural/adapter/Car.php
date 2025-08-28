<?php

declare(strict_types=1);

namespace patterns\structural\adapter;

class Car implements Driveable
{
    public function drive(): void
    {
        echo 'I am a driving car' . PHP_EOL;
    }


    public function stop(): void
    {
        echo 'I am car stopped driving.' . PHP_EOL;
    }
}

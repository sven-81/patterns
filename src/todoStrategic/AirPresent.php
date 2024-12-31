<?php

declare(strict_types=1);

namespace patterns\todoStrategic;

class AirPresent implements Present
{
    public function addRecipientsAge(): string
    {
        return 'Not much weight.' . PHP_EOL;
    }


    public function stamp(): void
    {
        print 'STAMP!' . PHP_EOL;
    }


    public function about(): string
    {
        return 'I am an air mail.' . PHP_EOL;
    }
}

<?php

declare(strict_types=1);

namespace patterns\behavioral\strategy;

class AirMail implements Mail
{
    public function about(): string
    {
        return 'I am an air mail.' . PHP_EOL;
    }


    public function getWeight(): string
    {
        return 'Not much weight.' . PHP_EOL;
    }
}

<?php

declare(strict_types=1);

namespace patterns\creational\pool;

class SomeWorker
{
    private const int HALF_SECOND = 500000;


    public function run(string $text): void
    {
        $length = strlen($text);
        for ($i = 0; $i < $length; $i++) {
            echo '.';
        }

        usleep(self::HALF_SECOND);
    }
}

<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod\simple;

class FileLogger implements Logger
{
    public function __construct(private readonly string $filePath)
    {
    }


    public function log(string $message): void
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}

<?php

declare(strict_types=1);

namespace patterns\creational\singleton;

class Logger extends Singleton
{
    private mixed $fileHandle;


    protected function __construct()
    {
        $this->fileHandle = fopen(__DIR__ . '/log.file', 'w');
    }


    public function writeLog(string $message): void
    {
        $date = date('Y-m-d');
        fwrite($this->fileHandle, $date . ': ' . $message . PHP_EOL);
    }


    public static function log(string $message): void
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }


    /*public function __construct(private readonly string $filePath)
    {
    }


    public function log(string $message): void
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }*/
}

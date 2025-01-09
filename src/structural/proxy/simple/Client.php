<?php

declare(strict_types=1);

namespace patterns\structural\proxy\simple;

class Client
{
    public function __construct(private readonly Downloader $downloader)
    {
    }


    public function run(): void
    {
        $url = __DIR__ . '/download.txt';
        echo $this->downloader->download($url) . PHP_EOL . PHP_EOL;
        echo $this->downloader->download($url) . PHP_EOL;
    }
}

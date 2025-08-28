<?php

declare(strict_types=1);

namespace patterns\structural\proxy\simple;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Client::class)]
#[CoversClass(SimpleDownloader::class)]
#[CoversClass(CachingDownloader::class)]
class ClientTest extends TestCase
{
    public function testDownloaderWithoutProxy(): void
    {
        $downloader = new SimpleDownloader();
        $client = new Client($downloader);
        $client->run();

        $this->expectOutputString(
            <<<'OUT'
Downloading something 
downloaded bytes: 12
Some Content

Downloading something 
downloaded bytes: 12
Some Content

OUT
        );
    }


    public function testDownloaderWithProxy(): void
    {
        $downloader = new SimpleDownloader();
        $poxy = new CachingDownloader($downloader);
        $client = new Client($poxy);
        $client->run();

        $this->expectOutputString(
            <<<'OUT'
url is not in CacheProxy
Downloading something 
downloaded bytes: 12
Some Content

url is already in CacheProxy. Taken from Cache
Some Content

OUT
        );
    }
}

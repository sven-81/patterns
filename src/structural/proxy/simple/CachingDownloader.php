<?php

declare(strict_types=1);

namespace patterns\structural\proxy\simple;

// more efficient proxy downloader
class CachingDownloader implements Downloader
{
    /** @var string[] */
    private $cache = [];


    public function __construct(private readonly SimpleDownloader $downloader)
    {
    }


    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
            echo 'url is not in CacheProxy' . PHP_EOL;
            $fileContent = $this->downloader->download($url);
            $this->cache[$url] = $fileContent;
        } else {
            echo 'url is already in CacheProxy. Taken from Cache' . PHP_EOL;
        }

        return $this->cache[$url];
    }
}

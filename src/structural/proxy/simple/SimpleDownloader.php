<?php

declare(strict_types=1);

namespace patterns\structural\proxy\simple;

// Real (inefficient) Downloader
class SimpleDownloader implements Downloader
{
    public function download(string $url): string
    {
        echo 'Downloading something ' . PHP_EOL;
        $fileContent = file_get_contents($url);
        echo 'downloaded bytes: ' . strlen($fileContent) . PHP_EOL;

        return $fileContent;
    }
}

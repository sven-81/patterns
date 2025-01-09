<?php

declare(strict_types=1);

namespace patterns\structural\proxy\simple;

interface Downloader
{
    public function download(string $url): string;
}

<?php

declare(strict_types=1);

namespace patterns\structural\facade;

interface Fonts
{
    public function getBold(): void;


    public function write(string $text): string;
}

<?php

declare(strict_types=1);

namespace patterns\structural\bridge;

class CmykLayout implements Layout
{
    public function render(string $text): string
    {
        return 'a layout in cmyk ' . $text;
    }
}

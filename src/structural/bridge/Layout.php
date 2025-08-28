<?php

declare(strict_types=1);

namespace patterns\structural\bridge;

interface Layout
{
    public function render(string $text): string;
}

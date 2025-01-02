<?php

declare(strict_types=1);

namespace patterns\structural\adapter\simple;

class JsonReport
{
    public function create(): string
    {
        return 'I am a special json report with my own special logic';
    }
}

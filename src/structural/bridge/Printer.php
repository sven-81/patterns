<?php

declare(strict_types=1);

namespace patterns\structural\bridge;

abstract class Printer
{
    public function __construct(protected Layout $implementation)
    {
    }


    public function setImplementation(Layout $implementation): void
    {
        $this->implementation = $implementation;
    }


    abstract public function get(): void;
}

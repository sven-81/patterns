<?php

declare(strict_types=1);

namespace patterns\creational\singleton;

class Config extends Singleton
{
    private array $configList = [];


    public function getValue(string $key): string
    {
        return $this->configList[$key];
    }


    public function setValue(string $key, string $value): void
    {
        $this->configList[$key] = $value;
    }
}

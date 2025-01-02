<?php

declare(strict_types=1);

namespace patterns\composite;

class File implements FileSystemItem
{
    public function __construct(private readonly string $name)
    {
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function display(int $depth = 0): void
    {
        print str_repeat('-', $depth) . $this->getName() . PHP_EOL;
    }
}

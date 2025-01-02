<?php

declare(strict_types=1);

namespace patterns\composite;

interface FileSystemItem
{
    public function getName(): string;


    public function display(int $depth = 0): void;
}

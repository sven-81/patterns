<?php

declare(strict_types=1);

namespace patterns\structural\composite;

class Folder implements FileSystemItem
{
    private array $items = [];


    public function __construct(private readonly string $name)
    {
    }


    public function getName(): string
    {
        return 'folder: ' . $this->name;
    }


    public function display(int $depth = 0): void
    {
        echo str_repeat("-", $depth) . $this->getName() . PHP_EOL;
        foreach ($this->items as $item) {
            $item->display($depth + 2);
        }
    }


    public function add(FileSystemItem $item): void
    {
        $this->items[] = $item;
    }


    public function remove(FileSystemItem $givenItem): void
    {
        foreach ($this->items as $key => $storedItem) {
            if ($storedItem === $givenItem)
                unset($this->items[$key]);
        }
    }
}

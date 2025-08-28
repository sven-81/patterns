<?php

declare(strict_types=1);

namespace patterns\behavioral\iterator;

use Iterator;

class CassetteShelf implements Iterator
{
    private int $position = 0;


    public function __construct(private array $cassettes = [])
    {
    }


    public function addProduct(Cassette $cassette): void
    {
        $this->cassettes[] = $cassette;
    }


    public function rewind(): void
    {
        $this->position = 0;
    }


    public function current(): Cassette
    {
        return $this->cassettes[$this->position];
    }


    public function key(): int
    {
        return $this->position;
    }


    public function next(): void
    {
        ++$this->position;
    }


    public function valid(): bool
    {
        return isset($this->cassettes[$this->position]);
    }
}

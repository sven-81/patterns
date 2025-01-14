<?php

declare(strict_types=1);

namespace patterns\behavioral\memento;

class TextState
{
    public function __construct(private readonly string $text)
    {
    }


    public function getText(): string
    {
        return $this->text;
    }
}

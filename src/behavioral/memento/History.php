<?php

declare(strict_types=1);

namespace patterns\behavioral\memento;

class History
{
    private array $history = [];

    private int $currentIndex = -1;


    public function addState(TextState $memento): void
    {
        $this->history[] = $memento;
        $this->currentIndex++;
    }


    public function getLastMemento(): ?TextState
    {
        if ($this->currentIndex < 0) {
            return null;
        }
        $this->currentIndex--;

        return $this->history[$this->currentIndex];
    }
}

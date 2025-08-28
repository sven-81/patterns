<?php

declare(strict_types=1);

namespace patterns\behavioral\memento;

class TextEditor
{
    private string $text = '';


    public function setText(string $text): void
    {
        $this->text = $text;
    }


    public function getText(): string
    {
        return $this->text;
    }


    public function createTextState(): TextState
    {
        return new TextState($this->text);
    }


    public function restoreMemento(TextState $memento): void
    {
        $this->text = $memento->getText();
    }
}

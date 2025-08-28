<?php

declare(strict_types=1);

namespace patterns\behavioral\memento;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(History::class)]
#[CoversClass(TextEditor::class)]
#[CoversClass(TextState::class)]
class TextEditorTest extends TestCase
{
    public function testCanUseTextEditor(): void
    {
        $editor = new TextEditor();
        $history = new History();

        $editor->setText('Hallo, Welt!');
        echo 'Aktueller Text: ' . $editor->getText() . PHP_EOL;
        $history->addState($editor->createTextState());

        $editor->setText('irgendwas neues!');
        echo 'Aktueller Text: ' . $editor->getText() . PHP_EOL;
        $history->addState($editor->createTextState());

        $editor->setText('irgendwas ganz neues!');
        echo 'Aktueller Text: ' . $editor->getText() . PHP_EOL;
        $history->addState($editor->createTextState());

        $editor->restoreMemento($history->getLastMemento());
        echo 'Aktueller Text nach 1. Undo: ' . $editor->getText() . PHP_EOL;

        $editor->restoreMemento($history->getLastMemento());
        echo 'Aktueller Text nach 2. Undo: ' . $editor->getText() . PHP_EOL;

        $this->expectOutputString(
            <<<'OUT'
Aktueller Text: Hallo, Welt!
Aktueller Text: irgendwas neues!
Aktueller Text: irgendwas ganz neues!
Aktueller Text nach 1. Undo: irgendwas neues!
Aktueller Text nach 2. Undo: Hallo, Welt!

OUT
        );
    }
}

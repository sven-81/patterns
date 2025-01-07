<?php

declare(strict_types=1);

namespace patterns\structural\decorator;

class EditorDecorator implements AddOn
{
    public function __construct(protected readonly AddOn $editor)
    {
    }


    public function run(string $text): string
    {
        return  $this->editor->run($text);
    }


    public function about(): void
    {
        echo 'I am text editor' . PHP_EOL;
    }
}

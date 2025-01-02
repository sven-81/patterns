<?php

declare(strict_types=1);

namespace patterns\structural\decorator;

class LowerCaseConverterDecorator extends EditorDecorator
{
    public function run(string $text): string
    {
        return strtolower(parent::run($text));
    }


    public function about(): void
    {
        print 'I write everything in lower case' . PHP_EOL;
    }
}

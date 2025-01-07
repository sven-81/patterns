<?php

declare(strict_types=1);

namespace patterns\structural\decorator;

class JsonFormatterDecorator extends EditorDecorator
{
    public function run(string $text): string
    {
        $json = parent::run($text);

        return json_encode($json, JSON_THROW_ON_ERROR);
    }


    public function about(): void
    {
        echo 'I write jsons' . PHP_EOL;
    }
}

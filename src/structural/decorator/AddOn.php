<?php

declare(strict_types=1);

namespace patterns\structural\decorator;

interface AddOn
{
    public function run(string $text): string;


    public function about(): void;
}

<?php

declare(strict_types=1);

namespace patterns\structural\decorator;

class LowerCaseConverterAddOn implements AddOn
{
    public function run(string $text): string
    {
        return $text;
    }


    public function about(): void
    {
        print ('Lower case converter addon is available');
    }
}

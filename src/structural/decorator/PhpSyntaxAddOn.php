<?php

declare(strict_types=1);

namespace patterns\structural\decorator;

class PhpSyntaxAddOn implements AddOn
{
    public function run(string $text): string
    {
        return '<?php ' . $text . ' ?>';
    }


    public function about(): void
    {
        print 'I have got the syntax for php' . PHP_EOL;
    }
}

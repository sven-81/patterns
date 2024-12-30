<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory\newspaper;

use patterns\creational\abstractFactory\TitleTemplate;

class NewspaperTitleTemplate implements TitleTemplate
{
    public function __construct(private readonly string $title)
    {
    }


    public function getTemplateString(): string
    {
        return '<b>' . $this->title . '!</b>';
    }
}

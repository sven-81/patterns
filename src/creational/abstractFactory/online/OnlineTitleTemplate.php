<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory\online;

use patterns\creational\abstractFactory\TitleTemplate;

class OnlineTitleTemplate implements TitleTemplate
{
    public function __construct(private readonly string $title)
    {
    }


    public function getTemplateString(): string
    {
        return '<h1>' . $this->title . '</h1>';
    }
}

<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

class NewspaperTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return '<b>' . $title . '</b>';
    }
}

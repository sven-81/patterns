<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

class OnlineTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return '<h1>'.$title.'</h1>';
    }
}

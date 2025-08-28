<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

interface TitleTemplate
{
    public function getTemplateString(): string;
}

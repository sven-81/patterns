<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

interface PageTemplate
{
    public function getTemplateString(): string;
}

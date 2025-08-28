<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

interface TemplateRenderer
{
    public function render(PageTemplate $pageTemplate): string;
}

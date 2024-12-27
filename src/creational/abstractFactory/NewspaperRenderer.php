<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

class NewspaperRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return Twig::render($templateString, $arguments);
    }
}

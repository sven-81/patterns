<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

class OnlineRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return #todo look https://refactoring.guru/design-patterns/abstract-factory/php/example#example-1; + ClientCode
    }
}

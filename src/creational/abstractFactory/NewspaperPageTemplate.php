<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

class NewspaperPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return 'Headline: ' . $renderedTitle . PHP_EOL
            . 'Article: ' . $content . PHP_EOL;
    }
}

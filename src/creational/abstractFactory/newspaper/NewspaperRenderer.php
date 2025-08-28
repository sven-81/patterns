<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory\newspaper;

use patterns\creational\abstractFactory\PageTemplate;
use patterns\creational\abstractFactory\TemplateRenderer;

class NewspaperRenderer implements TemplateRenderer
{
    public function render(
        PageTemplate $pageTemplate
    ): string {
        return 'Newspaper Page in your hands:' . PHP_EOL . $pageTemplate->getTemplateString();
    }
}

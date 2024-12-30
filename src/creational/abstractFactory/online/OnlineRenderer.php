<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory\online;

use patterns\creational\abstractFactory\PageTemplate;
use patterns\creational\abstractFactory\TemplateRenderer;

class OnlineRenderer implements TemplateRenderer
{
    public function render(
        PageTemplate $pageTemplate

    ): string {
        return 'Online Page:' . PHP_EOL . $pageTemplate->getTemplateString();
    }
}

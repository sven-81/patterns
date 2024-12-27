<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

class OnlinePageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content">Some Content</article>
        </div>
        HTML;
    }
}

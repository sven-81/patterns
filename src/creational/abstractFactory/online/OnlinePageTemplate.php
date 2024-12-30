<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory\online;

use patterns\creational\abstractFactory\BasePageTemplate;

class OnlinePageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();
        $dpi = $this->pictureTemplate->getDpi();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content">$this->content</article>
            <image class="image">picture with $dpi dpi</image>
        </div>
        HTML;
    }
}

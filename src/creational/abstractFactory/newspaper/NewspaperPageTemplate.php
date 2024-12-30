<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory\newspaper;

use patterns\creational\abstractFactory\BasePageTemplate;

class NewspaperPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();
        $dpi = $this->pictureTemplate->getDpi();

        return <<<OUT
    $renderedTitle
    <article class="content">$this->content</article>
    <image class="image">picture with $dpi dpi for print</image>
    <article class="content">a lot more stuff</article>
OUT;
    }
}

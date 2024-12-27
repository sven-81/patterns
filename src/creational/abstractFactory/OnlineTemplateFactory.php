<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

class OnlineTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new OnlineTitleTemplate();
    }


    public function createPageTemplate(): PageTemplate
    {
        return new OnlinePageTemplate($this->createTitleTemplate());
    }


    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}

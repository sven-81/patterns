<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

class NewspaperTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new NewspaperTitleTemplate();
    }


    public function createPageTemplate(): PageTemplate
    {
        return new NewspaperPageTemplate($this->createTitleTemplate());
    }


    public function getRenderer(): TemplateRenderer
    {
        return new NewspaperRenderer();
    }
}

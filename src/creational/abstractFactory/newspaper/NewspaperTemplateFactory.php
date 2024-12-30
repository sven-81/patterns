<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory\newspaper;

use patterns\creational\abstractFactory\PageTemplate;
use patterns\creational\abstractFactory\PictureTemplate;
use patterns\creational\abstractFactory\TemplateFactory;
use patterns\creational\abstractFactory\TemplateRenderer;
use patterns\creational\abstractFactory\TitleTemplate;

class NewspaperTemplateFactory implements TemplateFactory
{
    public function createPageTemplate(
        string $title,
        string $content,
        PictureTemplate $picture
    ): PageTemplate {
        return new NewspaperPageTemplate(
            $this->createTitleTemplate($title),
            $content,
            $this->createPictureTemplate()
        );
    }


    public function createTitleTemplate(string $title): TitleTemplate
    {
        return new NewspaperTitleTemplate($title);
    }


    public function createPictureTemplate(): PictureTemplate
    {
        return new NewspaperPicture();
    }


    public function getRenderer(): TemplateRenderer
    {
        return new NewspaperRenderer();
    }
}

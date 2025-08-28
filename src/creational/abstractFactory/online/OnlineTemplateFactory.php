<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory\online;

use patterns\creational\abstractFactory\PageTemplate;
use patterns\creational\abstractFactory\PictureTemplate;
use patterns\creational\abstractFactory\TemplateFactory;
use patterns\creational\abstractFactory\TemplateRenderer;
use patterns\creational\abstractFactory\TitleTemplate;

class OnlineTemplateFactory implements TemplateFactory
{
    public function createPageTemplate(
        string $title,
        string $content,
        PictureTemplate $picture
    ): PageTemplate {
        return new OnlinePageTemplate(
            $this->createTitleTemplate($title),
            $content,
            $this->createPictureTemplate()
        );
    }


    public function createTitleTemplate(string $title): TitleTemplate
    {
        return new OnlineTitleTemplate($title);
    }


    public function createPictureTemplate(): PictureTemplate
    {
        return new OnlinePicture();
    }


    public function getRenderer(): TemplateRenderer
    {
        return new OnlineRenderer();
    }
}

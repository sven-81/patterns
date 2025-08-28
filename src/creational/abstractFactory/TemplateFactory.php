<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

interface TemplateFactory
{
    public function createTitleTemplate(string $title): TitleTemplate;


    public function createPageTemplate(
        string $title,
        string $content,
        PictureTemplate $picture
    ): PageTemplate;


    public function createPictureTemplate(): PictureTemplate;


    public function getRenderer(): TemplateRenderer;
}

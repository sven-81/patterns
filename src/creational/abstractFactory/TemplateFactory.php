<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;


    public function createPageTemplate(): PageTemplate;


    public function getRenderer(): TemplateRenderer;
}

<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

class Page
{
    public function __construct(
        private readonly string $title,
        private readonly string $content,
        private readonly PictureTemplate $picture
    ) {
    }


    public function render(TemplateFactory $factory): string
    {
        $pageTemplate = $factory->createPageTemplate($this->title, $this->content, $this->picture);
        $renderer = $factory->getRenderer();

        return $renderer->render($pageTemplate);
    }
}

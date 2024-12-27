<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

class Page
{
    public function __construct(private readonly TitleTemplate $title, private readonly string $content)
    {
    }


    public function render(TemplateFactory $factory): string
    {
        $pageTemplate = $factory->createPageTemplate();

        $renderer = $factory->getRenderer();

        return $renderer->render($pageTemplate->getTemplateString(), [
            'title' => $this->title,
            'content' => $this->content,
        ]);
    }
}

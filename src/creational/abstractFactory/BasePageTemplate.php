<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

abstract class BasePageTemplate implements PageTemplate
{
    public function __construct(
        protected TitleTemplate $titleTemplate,
        protected readonly string $content,
        protected PictureTemplate $pictureTemplate
    ) {
    }
}

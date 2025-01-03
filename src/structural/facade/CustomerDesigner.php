<?php

declare(strict_types=1);

namespace patterns\structural\facade;

class CustomerDesigner
{
    public function __construct(
        private readonly DesignLibrary $designLibrary,
        private readonly Fonts $fonts
    ) {
    }


    public function drawHouse(): void
    {
        $this->designLibrary->drawRectangle();
        $this->designLibrary->drawTriangle();
        $this->designLibrary->drawLine();
        $this->designLibrary->drawLine();
        $this->designLibrary->drawLine();
        $this->designLibrary->drawCircle();
    }


    public function designHeadline(string $text): string
    {
        $this->designLibrary->drawRectangle();
        $this->designLibrary->createShadow();
        $this->fonts->getBold();

        return $this->fonts->write($text);
    }
}

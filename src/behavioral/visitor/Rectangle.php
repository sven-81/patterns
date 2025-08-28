<?php

declare(strict_types=1);

namespace patterns\behavioral\visitor;

class Rectangle implements Shape
{
    public function __construct(private readonly float $width, private readonly float $height)
    {
    }


    public function accept(ShapeVisitor $visitor): void
    {
        $visitor->visitRectangle($this);
    }


    public function getWidth(): float
    {
        return $this->width;
    }


    public function getHeight(): float
    {
        return $this->height;
    }
}

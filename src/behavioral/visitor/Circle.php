<?php

declare(strict_types=1);

namespace patterns\behavioral\visitor;

class Circle implements Shape
{
    public function __construct(private readonly float $radius)
    {
    }


    public function accept(ShapeVisitor $visitor): void
    {
        $visitor->visitCircle($this);
    }


    public function getRadius(): float
    {
        return $this->radius;
    }
}

<?php

declare(strict_types=1);

namespace patterns\behavioral\visitor;

class AreaCalculator implements ShapeVisitor
{
    private float $totalArea = 0;


    public function visitCircle(Circle $circle): void
    {
        $this->totalArea += M_PI * ($circle->getRadius() ** 2);
    }


    public function visitRectangle(Rectangle $rectangle): void
    {
        $this->totalArea += $rectangle->getWidth() * $rectangle->getHeight();
    }


    public function getTotalArea(): float
    {
        return $this->totalArea;
    }
}

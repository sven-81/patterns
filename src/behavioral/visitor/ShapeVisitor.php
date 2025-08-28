<?php

declare(strict_types=1);

namespace patterns\behavioral\visitor;

interface ShapeVisitor
{
    public function visitCircle(Circle $circle): void;


    public function visitRectangle(Rectangle $rectangle): void;
}

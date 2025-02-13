<?php

declare(strict_types=1);

namespace patterns\behavioral\visitor;

interface Shape
{
    public function accept(ShapeVisitor $visitor): void;
}

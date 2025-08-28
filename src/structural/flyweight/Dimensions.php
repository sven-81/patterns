<?php

declare(strict_types=1);

namespace patterns\structural\flyweight;

class Dimensions
{
    private function __construct(
        // extrinsic data
        private readonly int $width,
        private readonly int $height,
        private readonly int $depth,
        private readonly int $rotation
    ) {
    }


    public static function of(
        int $width,
        int $height,
        int $depth,
        int $rotation
    ): self {
        return new self($width, $height, $depth, $rotation);
    }


    public function render(): string
    {
        return ' with a width of ' . $this->width . 'mm,' .
            ' a height of ' . $this->height . 'mm' .
            ' and a depth of ' . $this->depth . 'mm' .
            ' with a rotation of ' . $this->rotation . ' degree.';
    }
}

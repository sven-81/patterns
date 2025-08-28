<?php

declare(strict_types=1);

namespace patterns\structural\flyweight;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Shape3D::class)]
#[CoversClass(ShapeFactory::class)]
#[CoversClass(Dimensions::class)]
class Shape3DTest extends TestCase
{
    public function testShape3D(): void
    {
        $shapeFactory = new ShapeFactory();
        $pyramide1 = $shapeFactory->getShapes('pyramide', 'stone');
        $pyramide2 = $shapeFactory->getShapes('pyramide', 'wooden');
        $cube = $shapeFactory->getShapes('cube', 'plastic');

        $pyramide1->render(Dimensions::of(1000, 1000, 1000, 0));
        $pyramide2->render(Dimensions::of(10, 10, 10, 90));
        $cube->render(Dimensions::of(50, 60, 70, 73));

        $this->expectOutputString(
            'created new 3D pyramide with stone texture.' . PHP_EOL .
            'created new 3D pyramide with wooden texture.' . PHP_EOL .
            'created new 3D cube with plastic texture.' . PHP_EOL .
            'Rendering a stone pyramide with a width of 1000mm, a height of 1000mm and ' .
            'a depth of 1000mm with a rotation of 0 degree.' . PHP_EOL .
            'Rendering a wooden pyramide with a width of 10mm, a height of 10mm and '
            . 'a depth of 10mm with a rotation of 90 degree.' . PHP_EOL .
            'Rendering a plastic cube with a width of 50mm, a height of 60mm and '
            . 'a depth of 70mm with a rotation of 73 degree.' . PHP_EOL
        );
    }
}

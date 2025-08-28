<?php

declare(strict_types=1);

namespace patterns\structural\flyweight;

class ShapeFactory
{
    public function __construct(private array $shapes = [])
    {
    }


    public function getShapes(string $type, string $texture): Shape3D
    {
        $key = $type . '|' . $texture;
        if (!array_key_exists($key, $this->shapes)) {
            $this->shapes[$key] = new Shape3D($type, $texture);
            echo 'created new 3D ' . $type . ' with ' . $texture . ' texture.' . PHP_EOL;
        }

        return $this->shapes[$key];
    }
}

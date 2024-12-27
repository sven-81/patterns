<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

interface Mail
{
    public function getWeight(): string;


    public function about(): string;
}
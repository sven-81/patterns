<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory;

interface PictureTemplate
{
    public function getDpi(): int;
}

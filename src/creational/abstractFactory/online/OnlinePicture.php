<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory\online;

use patterns\creational\abstractFactory\PictureTemplate;

class OnlinePicture implements PictureTemplate
{
    public function getDpi(): int
    {
        return 96;
    }
}

<?php

declare(strict_types=1);

namespace patterns\creational\abstractFactory\newspaper;

use patterns\creational\abstractFactory\PictureTemplate;

class NewspaperPicture implements PictureTemplate
{
    public function getDpi(): int
    {
        return 300;
    }
}

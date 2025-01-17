<?php

declare(strict_types=1);

namespace patterns\behavioral\strategy;

class ParcelShipping implements Mail
{
    public function about(): string
    {
        return 'I am a ' . $this->getWeight() . ' box for parcel shipping.' . PHP_EOL;
    }


    public function getWeight(): string
    {
        return 'really heavy' . PHP_EOL;
    }
}

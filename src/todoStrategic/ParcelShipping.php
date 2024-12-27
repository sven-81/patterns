<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

class ParcelShipping implements Present
{
    public function addRecipientsAge(): string
    {
        return 'really heavy' . PHP_EOL;
    }


    public function about(): string
    {
        return 'I am a ' . $this->addRecipientsAge() . ' box for parcel shipping.' . PHP_EOL;
    }
}

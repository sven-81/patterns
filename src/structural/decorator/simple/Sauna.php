<?php

declare(strict_types=1);

namespace patterns\structural\decorator\simple;

class Sauna extends BookingDecorator
{
    private const int PRICE = 3;


    public function calculateTotalPrice(): int
    {
        return $this->booking->calculateTotalPrice() + self::PRICE;
    }


    public function getProduct(): string
    {
        return $this->booking->getProduct() . ' and sauna';
    }
}

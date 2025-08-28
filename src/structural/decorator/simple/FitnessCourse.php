<?php

declare(strict_types=1);

namespace patterns\structural\decorator\simple;

class FitnessCourse extends BookingDecorator
{
    private const int PRICE = 7;


    public function calculateTotalPrice(): int
    {
        return $this->booking->calculateTotalPrice() + self::PRICE;
    }


    public function getProduct(): string
    {
        return $this->booking->getProduct() . ' incl. fitness course';
    }
}

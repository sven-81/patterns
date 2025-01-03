<?php

declare(strict_types=1);

namespace patterns\structural\decorator\simple;

class BasicTraining implements Booking
{
    public function calculateTotalPrice(): int
    {
        return 20;
    }


    public function getProduct(): string
    {
        return 'Basic training';
    }
}

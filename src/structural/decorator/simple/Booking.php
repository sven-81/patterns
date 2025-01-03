<?php

declare(strict_types=1);

namespace patterns\structural\decorator\simple;

interface Booking
{
    public function calculateTotalPrice(): int;

    public function getProduct(): string;
}

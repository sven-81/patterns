<?php

declare(strict_types=1);

namespace patterns\structural\decorator\simple;

abstract class BookingDecorator implements Booking
{
    public function __construct(protected Booking $booking)
    {
    }
}

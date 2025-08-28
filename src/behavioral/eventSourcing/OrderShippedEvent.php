<?php

declare(strict_types=1);

namespace patterns\behavioral\eventSourcing;

class OrderShippedEvent
{
    public function __construct(
        public string $orderId,
        public string $shippingAddress
    ) {}
}

<?php

declare(strict_types=1);

namespace patterns\behavioral\eventSourcing;

class OrderCompletedEvent
{
    public function __construct(
        public string $orderId,
        public string $completionDate
    ) {}
}

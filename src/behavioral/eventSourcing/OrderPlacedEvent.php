<?php

declare(strict_types=1);

namespace patterns\behavioral\eventSourcing;

class OrderPlacedEvent {
    public function __construct(
        public string $orderId,
        public float $amount
    ) {}
}

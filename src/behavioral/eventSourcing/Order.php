<?php

declare(strict_types=1);

namespace patterns\behavioral\eventSourcing;

//Aggregate

class Order
{
    private float $amount = 0;

    private string $status = 'Created';

    private string $shippingAddress = '';


    public function __construct(private readonly string $orderId)
    {
    }


    public function applyOrderPlacedEvent(OrderPlacedEvent $event): void
    {
        $this->amount = $event->amount;
        $this->status = 'Placed';
    }


    public function applyOrderShippedEvent(OrderShippedEvent $event): void
    {
        $this->shippingAddress = $event->shippingAddress;
        $this->status = 'Shipped';
    }


    public function applyOrderCompletedEvent(): void
    {
        $this->status = 'Completed';
    }


    public function applyEvents(array $events): void
    {
        foreach ($events as $event) {
            $this->applyEvent($event);
        }
    }


    private function applyEvent($event): void
    {
        if ($event instanceof OrderPlacedEvent) {
            $this->applyOrderPlacedEvent($event);
        } elseif ($event instanceof OrderShippedEvent) {
            $this->applyOrderShippedEvent($event);
        } elseif ($event instanceof OrderCompletedEvent) {
            $this->applyOrderCompletedEvent();
        }
    }


    public function getStatus(): string
    {
        return $this->status;
    }


    public function getOrderId(): string
    {
        return $this->orderId;
    }


    public function getAmount(): float
    {
        return $this->amount;
    }


    public function getShippingAddress(): string
    {
        return $this->shippingAddress;
    }
}

<?php

declare(strict_types=1);

namespace patterns\behavioral\eventSourcing;

class EventStore
{
    public function __construct(private array $events = [])
    {
    }


    public function appendEvent($event): void
    {
        $this->events[] = $event;
    }


    public function getEventsForAggregate(string $aggregateId): array
    {
        return array_filter(
            $this->events,
            static function ($event) use ($aggregateId) {
                return $event->orderId === $aggregateId;
            }
        );
    }
}

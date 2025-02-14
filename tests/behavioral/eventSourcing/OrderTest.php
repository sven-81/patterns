<?php

declare(strict_types=1);

namespace patterns\behavioral\eventSourcing;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Order::class)]
#[CoversClass(EventStore::class)]
#[CoversClass(OrderCompletedEvent::class)]
#[CoversClass(OrderPlacedEvent::class)]
#[CoversClass(OrderShippedEvent::class)]
class OrderTest extends TestCase
{
    public function testOrder(): void
    {
        $eventStore = new EventStore();

        $orderPlacedEvent = new OrderPlacedEvent('order1', 100.0);
        $orderShippedEvent = new OrderShippedEvent('order1', '123 Sesame Street');
        $orderCompletedEvent = new OrderCompletedEvent('order1', '2025-02-14');

        $eventStore->appendEvent($orderPlacedEvent);
        $eventStore->appendEvent($orderShippedEvent);
        $eventStore->appendEvent($orderCompletedEvent);

        // Bestellung rekonstruieren
        $order = new Order('order1');
        $events = $eventStore->getEventsForAggregate('order1');
        $order->applyEvents($events);

        echo 'OrderId: ' . $order->getOrderId() . PHP_EOL;
        echo 'Order Status: ' . $order->getStatus() . PHP_EOL;
        echo 'Order Amount: ' . $order->getAmount() . PHP_EOL;
        echo 'Shipping Address: ' . $order->getShippingAddress() . PHP_EOL;

        $this->expectOutputString(
            'OrderId: order1' . PHP_EOL
            . 'Order Status: Completed' . PHP_EOL
            . 'Order Amount: 100' . PHP_EOL
            . 'Shipping Address: 123 Sesame Street' . PHP_EOL
        );
    }
}

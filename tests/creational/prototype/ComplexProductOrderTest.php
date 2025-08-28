<?php

declare(strict_types=1);

namespace patterns\creational\prototype;

use DateTimeImmutable;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(OrderPrototype::class)]
#[CoversClass(ComplexProductOrder::class)]
#[CoversClass(SimpleProductOrder::class)]
class ComplexProductOrderTest extends TestCase
{
    public function testCanCloneOrders(): void
    {
        $complexOrder = new ComplexProductOrder(new DateTimeImmutable('12:13:14'));
        $simpleOrder = new SimpleProductOrder();

        for ($i = 0; $i < 2; $i++) {
            $order = clone $complexOrder;
            $order->setId('Order-No ' . $i);
            $order->setQuantity(10 + $i);
            $order->about();

            $this->assertInstanceOf(ComplexProductOrder::class, $order);
        }

        for ($i = 0; $i < 3; $i++) {
            $order = clone $simpleOrder;
            $order->setId('Order-No ' . $i);
            $order->setQuantity(100 + $i);
            $order->about();

            $this->assertInstanceOf(SimpleProductOrder::class, $order);
        }

        $this->expectOutputString(
            'Cloned complex product order' . PHP_EOL .
            'Id: Order-No 0, Category: really complex, Quantity: 510, date: 12:13:14' . PHP_EOL .
            'Cloned complex product order' . PHP_EOL .
            'Id: Order-No 1, Category: really complex, Quantity: 511, date: 12:13:14' . PHP_EOL .
            'Cloned simple product' . PHP_EOL .
            'Id: Order-No 0, Category: totally simple product, Quantity: 100' . PHP_EOL .
            'Cloned simple product' . PHP_EOL .
            'Id: Order-No 1, Category: totally simple product, Quantity: 101' . PHP_EOL .
            'Cloned simple product' . PHP_EOL .
            'Id: Order-No 2, Category: totally simple product, Quantity: 102' . PHP_EOL
        );
    }
}

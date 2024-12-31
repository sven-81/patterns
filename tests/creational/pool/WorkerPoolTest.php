<?php

declare(strict_types=1);

namespace patterns\creational\pool;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(WorkerPool::class)]
#[CoversClass(SomeWorker::class)]
class WorkerPoolTest extends TestCase
{
    public function testCanCreateNewInstances(): void
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();
        $worker3 = $pool->get();
        $this->assertCount(3, $pool);
        $this->assertNotSame($worker1, $worker2);
        $this->assertNotSame($worker1, $worker3);
        $this->assertNotSame($worker2, $worker3);
    }


    public function testCanGetSameInstanceTwiceWhenDisposingItFirst(): void
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        $this->assertCount(1, $pool);
        $this->assertSame($worker1, $worker2);
    }
}

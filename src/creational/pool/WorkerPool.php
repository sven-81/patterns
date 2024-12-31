<?php

declare(strict_types=1);

namespace patterns\creational\pool;

use Countable;

class WorkerPool implements Countable
{
    /** @var SomeWorker[] */
    private array $occupiedWorkers = [];

    /** @var SomeWorker[] */
    private array $freeWorkers = [];


    public function get(): SomeWorker
    {
        if (count($this->freeWorkers) < 1) {
            $worker = new SomeWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }
        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }


    public function dispose(SomeWorker $worker): void
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }


    public function count(): int
    {
        $occupied = count($this->occupiedWorkers);
        $free = count($this->freeWorkers);

        return $occupied + $free;
    }
}

<?php

declare(strict_types=1);

namespace patterns\creational\pool;

use LogicException;

class ConnectionPool
{
    private array $pool = [];

    private int $createdConnections = 0;


    public function __construct(private readonly int $maxConnections = 5)
    {
    }


    public function getConnection(): DatabaseConnection
    {
        if ($this->poolHasEntries()) {
            return array_pop($this->pool);
        }

        if ($this->maxConnectionsAreNotReachedYet()) {
            $this->createdConnections++;

            return new DatabaseConnection();
        }

        throw new LogicException('Maximale Anzahl von Verbindungen erreicht.');
    }


    public function releaseConnection(DatabaseConnection $connection): void
    {
        $this->pool[] = $connection;
        echo 'Verbindung erfolgreich in den Pool gelegt.' . PHP_EOL;
    }


    public function getPoolSize(): int
    {
        return count($this->pool);
    }


    private function poolHasEntries(): bool
    {
        return count($this->pool) > 0;
    }


    private function maxConnectionsAreNotReachedYet(): bool
    {
        return $this->createdConnections < $this->maxConnections;
    }
}

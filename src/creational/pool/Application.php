<?php

declare(strict_types=1);

namespace patterns\creational\pool;

use LogicException;

class Application
{
    public function run(): void
    {
        try {
            $pool = new ConnectionPool(3);

            $connection1 = $pool->getConnection();
            echo $connection1->connect();

            $connection2 = $pool->getConnection();
            echo $connection2->connect();

            $connection3 = $pool->getConnection();
            echo $connection3->connect();

            echo 'noch nichts im Pool:' . PHP_EOL;
            $this->currentPoolSize($pool);

            $this->forthConnectionWillFail($pool);

            $pool->releaseConnection($connection1);
            echo 'Pool enthält jetzt etwas:' . PHP_EOL;
            $this->currentPoolSize($pool);

            $connection4 = $pool->getConnection();
            echo $connection4->connect();
            echo 'Verbindung aus Pool geholt; Pool wieder leer:' . PHP_EOL;
            $this->currentPoolSize($pool);
        } catch (LogicException $exception) {
            echo $exception->getMessage();
        }
    }


    private function forthConnectionWillFail(ConnectionPool $pool): void
    {
        try {
            $pool->getConnection();
        } catch (LogicException $exception) {
            echo 'Kann #4 nicht erzeugen: ' . $exception->getMessage() . PHP_EOL;
            echo 'noch immer nichts im Pool:' . PHP_EOL;
            $this->currentPoolSize($pool);
        }
    }


    private function currentPoolSize(ConnectionPool $pool): void
    {
        echo 'Aktuelle Poolgröße: ' . $pool->getPoolSize() . PHP_EOL . PHP_EOL;
    }
}

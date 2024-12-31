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
            print $connection1->connect();

            $connection2 = $pool->getConnection();
            print $connection2->connect();

            $connection3 = $pool->getConnection();
            print $connection3->connect();

            print 'noch nichts im Pool:' . PHP_EOL;
            $this->currentPoolSize($pool);

            $this->forthConnectionWillFail($pool);

            $pool->releaseConnection($connection1);
            print 'Pool enthält jetzt etwas:' . PHP_EOL;
            $this->currentPoolSize($pool);

            $connection4 = $pool->getConnection();
            print $connection4->connect();
            print 'Verbindung aus Pool geholt; Pool wieder leer:' . PHP_EOL;
            $this->currentPoolSize($pool);
        } catch (LogicException $exception) {
            print $exception->getMessage();
        }
    }


    private function forthConnectionWillFail(ConnectionPool $pool): void
    {
        try {
            $pool->getConnection();
        } catch (LogicException $exception) {
            print 'Kann #4 nicht erzeugen: ' . $exception->getMessage() . PHP_EOL;
            print 'noch immer nichts im Pool:' . PHP_EOL;
            $this->currentPoolSize($pool);
        }
    }


    private function currentPoolSize(ConnectionPool $pool): void
    {
        print 'Aktuelle Poolgröße: ' . $pool->getPoolSize() . PHP_EOL . PHP_EOL;
    }
}

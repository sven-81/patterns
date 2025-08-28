<?php

declare(strict_types=1);

namespace patterns\creational\pool;

class DatabaseConnection
{
    public function connect(): string
    {
        return 'Datenbankverbindung hergestellt!' . PHP_EOL;
    }
}

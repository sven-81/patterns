<?php

declare(strict_types=1);

namespace patterns\structural\serviceLocator;

class DatabaseService implements Service
{
    public function connect(): string
    {
        return 'Datenbankverbindung hergestellt.';
    }
}

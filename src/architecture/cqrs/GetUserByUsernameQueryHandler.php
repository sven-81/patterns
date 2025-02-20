<?php

declare(strict_types=1);

namespace patterns\architecture\cqrs;

class GetUserByUsernameQueryHandler
{
    public function handle(GetUserByUsernameQuery $query): string
    {
        // Simulierte Logik zum Abrufen eines Benutzers aus der Datenbank

        return 'User ' . $query->getUsername() . ' taken from Database with mail: foo@bar.com' . PHP_EOL;
    }
}

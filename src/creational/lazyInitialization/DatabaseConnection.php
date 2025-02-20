<?php

declare(strict_types=1);

namespace patterns\creational\lazyInitialization;

class DatabaseConnection
{
    private ?PDO $connection = null;

    private string $host;

    private string $dbname;

    private string $user;

    private string $password;


    public function __construct(string $host, string $dbname, string $user, string $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
    }


    // Lazy Initialization: Verbindung wird nur aufgebaut, wenn sie benötigt wird
    public function getConnection(): PDO
    {
        if ($this->connection === null) {
            echo 'Datenbankverbindung wird jetzt hergestellt...' . PHP_EOL;
            $this->connection = new PDO(
                sprintf('mysql:host=%s;dbname=%s', $this->host, $this->dbname),
                $this->user,
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->connection;
    }
}

// Beispiel für die Verwendung
$db = new DatabaseConnection('localhost', 'test_db', 'root', '');

// Die Verbindung wird erst hier aufgebaut, wenn sie benötigt wird
$connection = $db->getConnection();

// Eine weitere Abfrage, ohne die Verbindung erneut zu erstellen
$anotherConnection = $db->getConnection();  // Die Verbindung wurde schon hergestellt

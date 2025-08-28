<?php

declare(strict_types=1);

namespace patterns\structural\dataMapper\simple;

use PDO;

class UserMapper
{
    public function __construct(private readonly PDO $pdo)
    {
    }


    public function find(int $id): ?User
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch();

        if ($row) {
            return new User($row[0]['id'], $row[0]['name'], $row[0]['email']);
        }

        return null;
    }


    public function findAll(): array
    {
        $stmt = $this->pdo->query('SELECT * FROM users');
        $users = [];

        $results = $stmt->fetchAll();
        foreach ($results as $row) {
            $users[] = new User($row['id'], $row['name'], $row['email']);
        }

        return $users;
    }
}

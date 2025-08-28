<?php

declare(strict_types=1);

namespace patterns\structural\repository;

class UserRepository
{
    private array $users = [];


    public function __construct()
    {
        // Hier simulieren wir einige Benutzerdaten; in Wirklichkeit käme hier die Persistenz
        $this->users[] = new User(1, 'John Doe', 'john@example.com');
        $this->users[] = new User(2, 'Jane Smith', 'jane@example.com');
    }


    public function findById(int $id): ?User
    {
        /** @var User $user */
        foreach ($this->users as $user) {
            if ($user->getId() === $id) {
                return $user;
            }
        }

        return null;
    }


    public function findAll(): array
    {
        return $this->users;
    }


    public function add(User $user): void
    {
        $this->users[] = $user;
    }


    public function delete(int $id): void
    {
        $this->users = array_filter($this->users, static function ($user) use ($id) {
            return $user->getId() !== $id;
        });
    }
}

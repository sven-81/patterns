<?php

declare(strict_types=1);

namespace patterns\architecture\cleanArchitecture;

// in app namespace App\Infrastructure\Persistence = src/filepath

class InMemoryUserRepository implements UserRepositoryInterface
{
    private array $users = [];


    public function save(User $user): void
    {
        $this->users[$user->getId()] = $user;
    }


    public function findById(string $id): ?User
    {
        return $this->users[$id] ?? null;
    }
}

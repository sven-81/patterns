<?php

declare(strict_types=1);

namespace patterns\architecture\hexagonalArchitecture;


// in app namespace App\Infrastructure\Adapters; = src/filepath

class InMemoryUserRepository implements UserRepositoryPort {
    private array $users = [];

    public function save(User $user): void {
        $this->users[$user->getId()] = $user;
    }

    public function findById(string $id): ?User {
        return $this->users[$id] ?? null;
    }
}

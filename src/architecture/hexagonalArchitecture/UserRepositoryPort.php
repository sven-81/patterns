<?php

declare(strict_types=1);

namespace patterns\architecture\hexagonalArchitecture;

// in app namespace App\Core\Application\Ports; = src/filepath

interface UserRepositoryPort
{
    public function save(User $user): void;


    public function findById(string $id): ?User;
}


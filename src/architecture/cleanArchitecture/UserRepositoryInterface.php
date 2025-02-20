<?php

declare(strict_types=1);

namespace patterns\architecture\cleanArchitecture;

// in app namespace App\Application\Interfaces = src/filepath

interface UserRepositoryInterface
{
    public function save(User $user): void;


    public function findById(string $id): ?User;
}

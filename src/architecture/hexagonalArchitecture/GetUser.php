<?php

declare(strict_types=1);

namespace patterns\architecture\hexagonalArchitecture;

// in app namespace App\Core\Application\UseCases; = src/filepath

use InvalidArgumentException;

class GetUser
{
    private UserRepositoryPort $userRepository;


    public function __construct(UserRepositoryPort $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function execute(string $userid): User
    {
        $user = $this->userRepository->findById($userid);
        if ($user === null) {
            throw new InvalidArgumentException('User not found');
        }

        return $user;
    }
}

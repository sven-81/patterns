<?php

declare(strict_types=1);

namespace patterns\architecture\hexagonalArchitecture;

// in app namespace App\Core\Application\UseCases; = src/filepath

class CreateUser
{
    private UserRepositoryPort $userRepository;


    public function __construct(UserRepositoryPort $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function execute(string $username, string $email): User
    {
        $user = new User(uniqid('', true), $username, $email);
        $this->userRepository->save($user);

        return $user;
    }
}

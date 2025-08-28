<?php

declare(strict_types=1);

namespace patterns\architecture\cleanArchitecture;

// in app namespace App\Application\UseCases = src/filepath


class CreateUser
{
    private UserRepositoryInterface $userRepository;


    public function __construct(UserRepositoryInterface $userRepository)
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

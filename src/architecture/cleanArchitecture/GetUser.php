<?php

declare(strict_types=1);

namespace patterns\architecture\cleanArchitecture;

// in app namespace App\Application\UseCases = src/filepath

class GetUser
{
    private UserRepositoryInterface $userRepository;


    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function execute(string $id): ?User
    {
        return $this->userRepository->findById($id);
    }
}

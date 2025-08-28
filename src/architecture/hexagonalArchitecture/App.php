<?php

declare(strict_types=1);

namespace patterns\architecture\hexagonalArchitecture;

// index.php (Framework Layer)

class App
{
    public function run(): void
    {
        $userRepository = new InMemoryUserRepository();

        $createUserUseCase = new CreateUser($userRepository);
        $newUser = $createUserUseCase->execute('maxmustermann', 'max@example.com');
        echo 'Benutzer erstellt: ' . $newUser->getUsername() . PHP_EOL;

        $getUserUseCase = new GetUser($userRepository);
        $foundUser = $getUserUseCase->execute($newUser->getId());

        echo 'Benutzer gefunden: ' . $foundUser->getUsername() . PHP_EOL;
    }
}

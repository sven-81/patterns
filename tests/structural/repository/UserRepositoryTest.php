<?php

declare(strict_types=1);

namespace patterns\structural\repository;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(User::class)]
#[CoversClass(UserRepository::class)]
class UserRepositoryTest extends TestCase
{
    private UserRepository $repository;


    protected function setUp(): void
    {
        $this->repository = new UserRepository();
    }


    public function testCanFindById(): void
    {
        $user = $this->repository->findById(1);

        $this->assertSame(1, $user->getId());
    }


    public function testGetAllUsers(): void
    {
        $users = $this->repository->findAll();

        self::assertCount(2, $users);
    }


    public function testCanAddNewUser(): void
    {
        $mail = 'alf@yahoo.com';
        $name = 'alf';
        $user = new User(3, $name, $mail);
        $this->repository->add($user);
        $newUser = $this->repository->findById(3);

        $this->assertSame($mail, $newUser->getEmail());
        $this->assertSame($name, $newUser->getName());
    }


    public function testCanDelete(): void
    {
        $this->repository->delete(2);
        $missingUser = $this->repository->findById(2);
        $this->assertNull($missingUser);
    }
}

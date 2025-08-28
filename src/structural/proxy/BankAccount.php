<?php

declare(strict_types=1);

namespace patterns\structural\proxy;

interface BankAccount
{
    public function deposit(int $amount): void;


    public function getBalance(): int;
}

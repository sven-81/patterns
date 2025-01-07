<?php

declare(strict_types=1);

namespace patterns\structural\privateClassData;

class BankAccountData
{
    private float $balance;


    public function __construct(float $initialBalance)
    {
        $this->balance = $initialBalance;
    }


    public function getBalance(): float
    {
        return $this->balance;
    }


    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }
}


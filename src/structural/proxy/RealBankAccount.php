<?php

declare(strict_types=1);

namespace patterns\structural\proxy;

class RealBankAccount implements BankAccount
{
    private array $transactions = [];


    public function deposit(int $amount): void
    {
        $this->transactions[] = $amount;
    }


    public function getBalance(): int
    {
        $this->doComplexStuffSinceOpeningAccount();

        return array_sum($this->transactions);
    }


    private function doComplexStuffSinceOpeningAccount(): void
    {
        echo 'doing all the stuff since opening account' . PHP_EOL;
    }
}

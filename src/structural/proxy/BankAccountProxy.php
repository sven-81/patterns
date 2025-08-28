<?php

declare(strict_types=1);

namespace patterns\structural\proxy;

class BankAccountProxy extends RealBankAccount implements BankAccount
{
    private ?int $balance = null;


    public function getBalance(): int
    {
        if ($this->balance === null) {
            $this->balance = parent::getBalance();
        }

        return $this->balance;
    }
}

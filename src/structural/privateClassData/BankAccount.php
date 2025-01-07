<?php

declare(strict_types=1);

namespace patterns\structural\privateClassData;

use InvalidArgumentException;
use RuntimeException;

class BankAccount
{
    private BankAccountData $data;


    public function __construct(float $initialBalance)
    {
        $this->data = new BankAccountData($initialBalance);
    }


    public function getBalance(): float
    {
        return $this->data->getBalance();
    }


    public function deposit(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException('Einzahlungsbetrag muss positiv sein.');
        }

        $newBalance = $this->data->getBalance() + $amount;
        $this->data->setBalance($newBalance);

        echo 'Erfolgreich ' . $amount . ' eingezahlt. Neuer Kontostand: ' . $newBalance . PHP_EOL;
    }


    public function withdraw(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException('Abhebungsbetrag muss positiv sein.');
        }

        if ($this->data->getBalance() < $amount) {
            throw new RuntimeException('Unzureichendes Guthaben. Abhebung abgelehnt.');
        }

        $newBalance = $this->data->getBalance() - $amount;
        $this->data->setBalance($newBalance);

        echo 'Erfolgreich ' . $amount . ' abgehoben. Neuer Kontostand: ' . $newBalance . PHP_EOL;
    }
}

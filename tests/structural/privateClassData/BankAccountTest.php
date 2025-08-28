<?php

declare(strict_types=1);

namespace patterns\structural\privateClassData;

use Exception;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(BankAccount::class)]
#[CoversClass(BankAccountData::class)]
class BankAccountTest extends TestCase
{
    public function testCanUseBankAccount(): void
    {

        try {
            $account = new BankAccount(500.0);
            $this->assertSame(500.0, $account->getBalance());

            echo 'Aktueller Kontostand: ' . $account->getBalance() . PHP_EOL;

            $account->deposit(150.0);
            $this->assertSame(650.0, $account->getBalance());

            $account->withdraw(200.0);
            $this->assertSame(450.0, $account->getBalance());

            $account->withdraw(600.0);
        } catch (Exception $exception) {
            echo 'Fehler: ' . $exception->getMessage() . PHP_EOL;
        }

        $this->expectOutputString(
            'Aktueller Kontostand: 500' . PHP_EOL .
            'Erfolgreich 150 eingezahlt. Neuer Kontostand: 650' . PHP_EOL .
            'Erfolgreich 200 abgehoben. Neuer Kontostand: 450' . PHP_EOL .
            'Fehler: Unzureichendes Guthaben. Abhebung abgelehnt.' . PHP_EOL
        );
    }
}

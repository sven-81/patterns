<?php

declare(strict_types=1);

namespace patterns\structural\proxy;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(BankAccountProxy::class)]
#[CoversClass(RealBankAccount::class)]
class BankAccountProxyTest extends TestCase
{
    public function testBankAccountUsesProxy(): void
    {
        $bankAccountProxy = new BankAccountProxy();
        $bankAccountProxy->deposit(50);

        $current = $bankAccountProxy->getBalance();
        echo 'Current balance: ' . $current . PHP_EOL;

        $bankAccountProxy->deposit(100);
        $oldCurrent = $bankAccountProxy->getBalance();
        echo 'balance still is: ' . $current . PHP_EOL;

        $this->assertEquals(50, $oldCurrent);
        $this->expectOutputString(
            <<<'OUT'
doing all the stuff since opening account
Current balance: 50
balance still is: 50

OUT
        );
    }
}

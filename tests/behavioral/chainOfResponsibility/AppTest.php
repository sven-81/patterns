<?php

declare(strict_types=1);

namespace patterns\behavioral\chainOfResponsibility;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(App::class)]
#[CoversClass(ChatBot::class)]
#[CoversClass(Hotline::class)]
#[CoversClass(System::class)]
#[CoversClass(TechnicalSupport::class)]
#[CoversClass(CustomerContactFlow::class)]
class AppTest extends TestCase
{
    public function testCanRunSuccessfullyOrderRequest(): void
    {
        $app = new App();
        $app->initApp('order', 1234);

        $this->expectOutputString(
            <<<'OUT'
Hello customer
Glad to help you with your order
we could help you

OUT
        );
    }


    public function testCanRunSuccessfullyTechnicalRequest(): void
    {
        $app = new App();
        $app->initApp('technical', 1234);

        $this->expectOutputString(
            <<<'OUT'
Hello customer
Turn it off and on again
we could help you

OUT
        );
    }


    public function testWillFailForCustomerIdRequest(): void
    {
        $app = new App();
        $app->initApp('technical', 12345);

        $this->expectOutputString(
            <<<'OUT'
Sorry, Support for customers only

OUT
        );
    }


    public function testWillFailForSubjectRequest(): void
    {
        $app = new App();
        $app->initApp('spam', 1234);

        $this->expectOutputString(
            <<<'OUT'
Subject is unknown

OUT
        );
    }
}

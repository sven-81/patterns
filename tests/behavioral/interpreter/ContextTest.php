<?php

declare(strict_types=1);

namespace patterns\behavioral\interpreter;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(AndExpression::class)]
#[CoversClass(OrExpression::class)]
#[CoversClass(EqualTo::class)]
#[CoversClass(GreaterThan::class)]
class ContextTest extends TestCase
{
    public function testInterpreterWorks(): void
    {
        $context = [
            'orderTotal' => 1200,
            'customerType' => 'VIP',
            'discount' => 0.25,
        ];

        //Rule: orderTotal > 1000 AND customerType == 'VIP'
        $rule = new AndExpression(
            new GreaterThan('orderTotal', 1000),
            new EqualTo('customerType', 'VIP')
        );

        echo sprintf(
            'Regel erfüllt: %s' . PHP_EOL,
            $this->interpret($rule, $context)
        );

        //2. Rule: orderTotal < 500 OR discount > 0.2
        $rule2 = new OrExpression(
            new GreaterThan('orderTotal', 500),
            new GreaterThan('discount', 0.2)
        );

        echo sprintf(
            'Regel 2 erfüllt: %s' . PHP_EOL,
            $this->interpret($rule, $context)
        );

        $this->expectOutputString('Regel erfüllt: Ja' . PHP_EOL . 'Regel 2 erfüllt: Ja' . PHP_EOL);
    }


    private function interpret(ContextExpression $rule, array $context): string
    {
        if ($rule->interpret($context)) {
            return 'Ja';
        }

        return 'Nein';
    }
}

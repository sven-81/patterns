<?php

declare(strict_types=1);

namespace patterns\structural\eav;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Attribute::class)]
#[CoversClass(Value::class)]
#[CoversClass(EntityManager::class)]
class EntityManagerTest extends TestCase
{
    public function testCanRunEntityManager(): void
    {
        $eavManager = new EntityManager();

        $product = $eavManager->createEntity('Laptop');
        $priceAttribute = $eavManager->createAttribute('Price');
        $colorAttribute = $eavManager->createAttribute('Color');
        $weightAttribute = $eavManager->createAttribute('Weight');

        $eavManager->setEntityValue($product, $priceAttribute, '1000 USD');
        $eavManager->setEntityValue($product, $colorAttribute, 'Silver');
        $eavManager->setEntityValue($product, $weightAttribute, '2.5 kg');

        $attributes = $eavManager->getEntityAttributes($product);

        echo 'Product Attributes:' . PHP_EOL;
        foreach ($attributes as $attribute => $value) {
            echo $attribute . ': ' . $value . PHP_EOL;
        }

        $this->expectOutputString(
            'Product Attributes:' . PHP_EOL
            . 'Price: 1000 USD' . PHP_EOL
            . 'Color: Silver' . PHP_EOL
            . 'Weight: 2.5 kg' . PHP_EOL
        );
    }
}

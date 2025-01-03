<?php

declare(strict_types=1);

namespace patterns\structural\dataMapper;

use InvalidArgumentException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Product::class)]
#[CoversClass(ProductMapper::class)]
#[CoversClass(Repository::class)]
class ProductMapperTest extends TestCase
{
    public function testCanMapProductFromRepository(): void
    {
        $expected = ['name' => 'banana', 'price' => 3];
        $data = [
            1 => ['name' => 'apple', 'price' => 1],
            2 => $expected,
            3 => ['name' => 'pineapple', 'price' => 5],
        ];
        $repository = new Repository($data);
        $productMapper = new ProductMapper($repository);

        $productMapper->findById(2);

        self::assertEquals(Product::fromState($expected), $productMapper->findById(2));
        self::assertEquals('banana', $productMapper->findById(2)->getName());
        self::assertEquals(3, $productMapper->findById(2)->getPrice());
    }


    public function testWillNotMapInvalidData(): void
    {
        $this->expectExceptionObject(new InvalidArgumentException('Product not found with id: 666'));

        $noData = [];
        $repository = new Repository($noData);
        $productMapper = new ProductMapper($repository);

        $productMapper->findById(666);
    }
}

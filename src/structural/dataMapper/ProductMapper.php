<?php

declare(strict_types=1);

namespace patterns\structural\dataMapper;

use InvalidArgumentException;

class ProductMapper
{
    public function __construct(private Repository $repository)
    {
    }


    public function findById(int $id): Product
    {
        $result = $this->repository->find($id);

        if ($result === null) {
            throw new InvalidArgumentException('Product not found with id: ' . $id);
        }

        return $this->mapProduct($result);
    }


    private function mapProduct(array $state): Product
    {
        return Product::fromState($state);
    }
}

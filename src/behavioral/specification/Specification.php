<?php

declare(strict_types=1);

namespace patterns\behavioral\specification;

interface Specification
{
    public function isSatisfiedBy($item): bool;
}

<?php

declare(strict_types=1);

namespace patterns\behavioral\interpreter\simple;

interface Expression
{
    public function interpret(): int;
}

<?php

declare(strict_types=1);

namespace patterns\behavioral\strategy;

interface Mail
{
    public function getWeight(): string;


    public function about(): string;
}
<?php

declare(strict_types=1);

namespace patterns\behavioral\strategy;


interface TransportStrategy
{
    public function deliver(Mail $mail): void;
}

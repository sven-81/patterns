<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

interface Transport
{
    public function deliver(Present $mail): void;
}

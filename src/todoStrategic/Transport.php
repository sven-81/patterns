<?php

declare(strict_types=1);

namespace patterns\todoStrategic;

interface Transport
{
    public function deliver(Present $mail): void;
}

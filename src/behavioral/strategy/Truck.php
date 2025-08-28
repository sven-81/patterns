<?php

declare(strict_types=1);

namespace patterns\behavioral\strategy;

class Truck implements TransportStrategy
{
    public function deliver(Mail $mail): void
    {
        echo 'I am a truck and I delivered: ' . PHP_EOL;
        echo $mail->about();
        echo $mail->getWeight();
    }
}

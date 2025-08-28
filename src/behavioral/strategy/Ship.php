<?php

declare(strict_types=1);

namespace patterns\behavioral\strategy;


class Ship implements TransportStrategy
{
    private false $emptyStorage;


    public function deliver(Mail $mail): void
    {
        $this->emptyStorage = false;

        echo 'I am a ship and I delivered: ' . PHP_EOL;
        echo $mail->about();
        echo $mail->getWeight();
    }


    public function hasEmptyStorage(): bool
    {
        return $this->emptyStorage;
    }
}

<?php

declare(strict_types=1);

namespace patterns\todoStrategic;

class Ship implements Transport
{
    private false $emptyStorage;


    public function deliver(Present $mail): void
    {
        $this->emptyStorage = false;

        echo 'I am a ship and I delivered: ' . PHP_EOL;
        echo $mail->about();
        echo $mail->addRecipientsAge();
    }


    public function hasEmptyStorage(): bool
    {
        return $this->emptyStorage;
    }
}

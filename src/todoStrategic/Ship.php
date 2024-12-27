<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

class Ship implements Transport
{
    private false $emptyStorage;


    public function deliver(Present $mail): void
    {
        $this->emptyStorage = false;

        print 'I am a ship and I delivered: ' . PHP_EOL;
        print $mail->about();
        print $mail->addRecipientsAge();
    }


    public function hasEmptyStorage(): bool
    {
        return $this->emptyStorage;
    }
}

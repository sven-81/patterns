<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

class Plane implements Transport
{
    public function deliver(Present $mail): void
    {
        print 'I am a plane and I delivered: ' . PHP_EOL;
        print $mail->about();
        print $mail->addRecipientsAge();
    }
}

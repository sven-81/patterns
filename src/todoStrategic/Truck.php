<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

class Truck implements Transport
{
    public function deliver(Present $mail): void
    {
        print 'I am a truck and I delivered: ' . PHP_EOL;
        print $mail->about();
        print $mail->addRecipientsAge();
    }


    public function returnToSender(Present $mail): void
    {
        print 'returned to Sender, cannot handle Mail type: ' . get_class($mail) . PHP_EOL;
    }
}

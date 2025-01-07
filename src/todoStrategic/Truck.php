<?php

declare(strict_types=1);

namespace patterns\todoStrategic;

class Truck implements Transport
{
    public function deliver(Present $mail): void
    {
        echo 'I am a truck and I delivered: ' . PHP_EOL;
        echo $mail->about();
        echo $mail->addRecipientsAge();
    }


    public function returnToSender(Present $mail): void
    {
        echo 'returned to Sender, cannot handle Mail type: ' . get_class($mail) . PHP_EOL;
    }
}

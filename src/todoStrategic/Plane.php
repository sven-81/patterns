<?php

declare(strict_types=1);

namespace patterns\todoStrategic;

class Plane implements Transport
{
    public function deliver(Present $mail): void
    {
        echo 'I am a plane and I delivered: ' . PHP_EOL;
        echo $mail->about();
        echo $mail->addRecipientsAge();
    }
}

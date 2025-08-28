<?php

declare(strict_types=1);

namespace patterns\behavioral\strategy;

class FreightCenter
{
    public function __construct(private readonly FreightCenterManager $manager)
    {
    }


    public function run(): void
    {
        $mails = [
            new AirMail(),
            new ParcelShipping(),
            new ParcelShipping(),
            new AirMail(),
            new AirMail(),
        ];

        $this->straightAfterDocumentation($mails);
        echo PHP_EOL . PHP_EOL;
        $this->interpretedPattern($mails);
    }


    private function straightAfterDocumentation(array $mails): void
    {
        foreach ($mails as $mail) {
            if ($mail instanceof AirMail) {
                $this->manager->setTransportStrategy(new Plane());
            } elseif ($mail instanceof ParcelShipping) {
                $this->manager->setTransportStrategy(new Truck());
            } else {
                $this->manager->setTransportStrategy(new Ship());
            }
            $this->manager->deliverMail($mail);
        }
    }


    private function interpretedPattern(array $mails): void
    {
        foreach ($mails as $mail) {
            if ($mail instanceof AirMail) {
                $vehicle = new Plane();
            } elseif ($mail instanceof ParcelShipping) {
                $vehicle = new Truck();
            } else {
                $vehicle = new Ship();
            }
            $vehicle->deliver($mail);
        }
    }
}

<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

class FreightCenter
{
    public function run(): void
    {
        $plane = new Plane();
        $truck = new Truck();
        $ship = new HandymanElf();

        $mails = [
            new Bear(),
            new Laptop(),
            new Laptop(),
            new Bear(),
            new Bear(),
        ];

        foreach ($mails as $mail) {
            if ($mail instanceof Bear) {
                $plane->deliver($mail);
            } elseif ($mail instanceof Laptop) {
                if ($ship->isBusy()) {
                    $ship->deliver($mail);
                } else {
                    $truck->deliver($mail);
                }
            } else {
                $truck->returnToSender($mail);
            }
        }
    }
}

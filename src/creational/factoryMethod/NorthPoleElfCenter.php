<?php

declare(strict_types=1);

namespace patterns\creational\factoryMethod;

class NorthPoleElfCenter
{
    private HandymanElf $handymanElf;


    public function run(): void
    {
        $presents = [
            new Bear(),
            new Laptop(),
            new Laptop(),
            new Bear(),
            new Bear(),
        ];

        $this->handymanElf = new HandymanElf(false);

        foreach ($presents as $present) {
            $this->wrapPresents($present);
        }
    }


    private function wrapPresents(Present $present): void
    {

        match (true) {
            $present instanceof Bear => $this->letTailorWork($present),
            $present instanceof Laptop => $this->workForHandymen($present),
            default => null
        };
    }


    private function letTailorWork(Bear $present): void
    {
        $tailorElf = new TailorElf();

        $tailorElf->wrap($present);
    }


    private function workForHandymen(Laptop $present): void
    {
        if ($this->handymanElf->isBusy()) {
            $this->letAnotherHandymanWork($present);
        } else {
            $this->handymanElf->wrap($present);
        }
    }


    private function letAnotherHandymanWork(Laptop $present): void
    {
        $anotherHandymanElf = new AnotherHandymanElf();
        $anotherHandymanElf->wrap($present);
    }
}

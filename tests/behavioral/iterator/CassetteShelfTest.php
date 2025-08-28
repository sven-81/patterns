<?php

declare(strict_types=1);

namespace patterns\behavioral\iterator;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(CassetteShelf::class)]
#[CoversClass(Cassette::class)]
class CassetteShelfTest extends TestCase
{
    public function testCanUseCassetteShelf(): void
    {
        $cassette1 = new Cassette('??? und der Superpapagei', 9.99);
        $cassette2 = new Cassette('Benjamin Blümchen als Pirat', 4.99);
        $cassette3 = new Cassette('Fünf Freunde', 7.95);

        $shelf = new CassetteShelf();
        $shelf->addProduct($cassette1);
        $shelf->addProduct($cassette2);
        $shelf->addProduct($cassette3);

        foreach ($shelf as $cassette) {
            echo $shelf->key() . ' Kassette: ' . $cassette->getName()
                . ' - Preis: ' . $cassette->getPrice() . ' EUR' . PHP_EOL;
        }

        $this->expectOutputString(
            '0 Kassette: ??? und der Superpapagei - Preis: 9.99 EUR' . PHP_EOL
            . '1 Kassette: Benjamin Blümchen als Pirat - Preis: 4.99 EUR' . PHP_EOL
            . '2 Kassette: Fünf Freunde - Preis: 7.95 EUR' . PHP_EOL
        );
    }
}

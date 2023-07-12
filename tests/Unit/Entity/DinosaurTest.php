<?php

namespace App\Tests\Unit\Entity;

use App\Entity\Dinosaur;
use PHPUnit\Framework\TestCase;

class DinosaurTest extends TestCase
{
    /*
    //phpunit will only execute public functions that begin with the word "test". must start with test
    public function testItWorks(): void
    {
        //if actual value doesn't match expected value, test will fail
        //assertEquals is like doing: if 42 == 42
        self::assertEquals('42', 42);
    }

    public function testItWorksTheSame(): void
    {
        //assertSame is like doing: if '42' === 42. so this test will fail since the expected is a string
        self::assertSame('42', 42);
    }
    */

    public function testCanGetAndSetData(): void
    {
        $dino = new Dinosaur(
            name: 'Big Eaty',
            genus: 'Tyrannosaurus',
            length: 15,
            enclosure: 'Paddock A'
        );

        self::assertSame('Big Eaty', $dino->getName());
        self::assertSame('Tyrannosaurus', $dino->getGenus());
        self::assertSame(15, $dino->getLength());
        self::assertSame('Paddock A', $dino->getEnclosure());
    }
}
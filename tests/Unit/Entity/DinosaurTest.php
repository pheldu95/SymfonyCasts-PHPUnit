<?php

namespace App\Tests\Unit\Entity;

use PHPUnit\Framework\TestCase;

class DinosaurTest extends TestCase
{
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
}
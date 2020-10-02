<?php

namespace Test;

use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{

    public function testAddOne()
    {
        $math = new Math();
        $this->assertSame(2, $math->addOne(1));
    }
}

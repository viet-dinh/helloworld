<?php

namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use VietDinh\HelloWorld\SayHi;

class SayHiTest extends TestCase
{
    public function testSayHello()
    {
        $this->assertEquals('Hi there!', (new SayHi())->execute());
    }
}
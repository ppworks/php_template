<?php

use PHPUnit\Framework\TestCase;

class HogeTest extends TestCase
{
    public function testName()
    {
        $hoge = new App\Hoge('test');
        $this->assertEquals('test', $hoge->name);
    }
}

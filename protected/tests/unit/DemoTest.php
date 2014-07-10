<?php

class DemoTest extends CTestCase
{
    public function testMailingToOnePerson()
    {
        $count = 1;
        $this->assertEquals(1, $count);
    }

    public function testA()
    {
        $this->assertTrue(true, true);
    }

    public function testB()
    {
        $this->assertEquals(25, 25);
    }

    public function testC()
    {
        $this->assertEquals(30, 30);
    }
}

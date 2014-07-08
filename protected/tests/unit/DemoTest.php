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
        $this->assertEqual(25, 12);
    }
}

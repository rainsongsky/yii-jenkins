<?php
/**
 * Created by JetBrains PhpStorm.
 * User: drizheruk
 * Date: 7/15/13
 * Time: 7:52 PM
 * To change this template use File | Settings | File Templates.
 */

class DemoTest extends CTestCase
{
    public function testMailingToOnePerson()
    {
        $count = 1;
        $this->assertEquals(5, $count);
    }
    
    public function testA(){
	$this->assertTrue(true, false);
    }

}

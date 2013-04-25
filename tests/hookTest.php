<?php

class HookTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $_REQUEST['payload'] = file_get_contents('tests/payload.json');
    }

    public function tearDown()
    {
        unset($_REQUEST);
    }

    public function testPayload()
    {
        $this->assertTrue(isset($_REQUEST['payload']));
    }
    
    public function testHook()
    {
        $this->assertInstanceOf('Hook', $hook = new Hook());
    }
}

